<?php
class Pages extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->medcineModel = $this->model('Medicine');
    }

    public function index(){
        $data = [
          'title' => 'Home Page',  
          'author' => 'Reshav Sahani',  
          'date' => '23/05/2022',
          'categoryList' => $this->medcineModel->getCategories(),
          'categoryPain' => $this->getMedicineByTag('covid-care'),
          'categoryOral' => $this->getMedicineByTag('oral-care'),
          'categoryMind' => $this->getMedicineByTag('mind-care'),
        ];
        $this->view('Home',$data);        
    }
    
    public function getMedicineByTag($slug){
      $medicine = $this->medcineModel->getMedicine();
      $resultMed = [];
      foreach($medicine as $med){
          $getTag = explode(',',$med->categories);
          foreach($getTag as $tag){
              $tags = str_replace(' ', '-',strtolower(trim($tag)));
              if($tags === $slug){
                  $resultMed[] = $med;
              }
          }
      }
      return $resultMed;
    }
  
    public function about(){
      $data = ['title' => 'About Us'];
      $this->view('About',$data );        
    }

    public function contact(){
      $data = ['title' => 'Contact Us'];
      $this->view('contactus',$data );        
  }

    public function product_details(){
      $this->view('Product_details');        
  }

  public function profile(){
    $this->view('user_profile');        
}
   
    public function errorPage(){
        $this->view('404');
    }

    public function cart(){
      if(isset($_SESSION['user_secret_name'])){
        $data = [
          'title' => 'My Cart',
          'address' => '',
          'city' => '',
          'state' => '',
          'pincode' => '',
          'landmark' => '',
          'name' => $_SESSION['user_name'],
          'mobile' => $_SESSION['user_mobile'],
          'isAddress' => $this->userModel->getAddressAvialibilty($_SESSION['user_secret_name']),
          'user' => $_SESSION['user_secret_name'],
        ];
        if(countCart() !=0){
         $data['cartData'] = $this->getMedicineByForCart();
         $data['priceSummary'] = $this->getCalculatedPrice($data['cartData']);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            $data['address'] = trim($_POST['address']);
            $data['city'] = trim($_POST['city']);
            $data['state'] = trim($_POST['state']);
            $data['pincode'] = trim($_POST['pincode']);
            $data['landmark'] = trim($_POST['landmark']);
            $data['type'] = trim($_POST['type']);
            $data['user'] = $_SESSION['user_secret_name'];
            $data['name'] = trim($_POST['name']);
            $data['mobile'] = trim($_POST['mobile']);

            if($this->userModel->addCartAddress($data)){
              header('Location: '.$_SERVER['REQUEST_URI']);
            }else{
              echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
            }
        }
          $this->view('Cart', $data);
        }else
          $this->view('emptyCart', $data);
      }
      else{
        header('Location:'. URLROOT . '/login');
      }

    }
    public function order(){
      $data=[
        'title'=> 'Order Placed',
        'orderDetails' => $this->userModel->getOrders($_SESSION['user_secret_name']),
    ];
      $this->view('order', $data);
    }
    public function getOrderDetails($name_slug){
      $allOrder = $this->userModel->getOrders($name_slug);
      $result= [
        'orders' => [],
        'address' => [],
        'medicine' => [],
      ];
      foreach($allOrder as $order){
        $result['orders'][] =  $order;
        $result['address'][] =  $this->userModel->getAddressById($order->user_details);
        $result['medicine'][] = $this->getMedicneData($order->product);
      }
      return $result;

    }

    public function getMedicneData($data){
      $result = [];
      $data = explode(', ',$data);
      foreach($data as $item){
        $result[] = $this->userModel->getMedicineByTag($item);
      }
      return $result;
    }

    public function orderdone(){
      $data=['title'=> 'Order Placed'];
      $this->view('orderdone', $data);
    }
    public function cartSummary(){
      if(isset($_SESSION['user_secret_name'])){
        $data = [
          'title' => 'My Cart',
          'address' => '',
          'city' => '',
          'state' => '',
          'pincode' => '',
          'landmark' => '',
          'name' => $_SESSION['user_name'],
          'mobile' => $_SESSION['user_mobile'],
          'isAddress' => $this->userModel->getAddressAvialibilty($_SESSION['user_secret_name']),
          'user' => $_SESSION['user_secret_name'],
          'getAddress' => $this->userModel->getAddress($_SESSION['user_secret_name']),

          'username' => '',
          'user_details' => '',
          'product' => '',
          'price' => '',
          'order_date' => '',
          'delivery_date' => '',
          
        ];
        if(countCart() !=0){
         $data['cartData'] = $this->getMedicineByForCart();
         $data['priceSummary'] = $this->getCalculatedPrice($data['cartData']);
         if(isset($_GET['userAddress'])){
          if($this->userModel->deleteAddress($_GET['userAddress'])){
            header('Location: '.URLROOT.'/cart-summary');
          }else{
            echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
          } 
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
          if(isset($_REQUEST['price']) && isset($_REQUEST['orderDate']) && isset($_REQUEST['deliveryDate']) && isset($_REQUEST['addressType'])){
                    $data['username'] = $_SESSION['user_secret_name'];
                    $data['user_details'] =  $_REQUEST['addressType'];
                    $data['product'] = $this->getSlugArray();
                    $data['price'] =  $_REQUEST['price'];
                    $data['order_date'] =  $_REQUEST['orderDate'];
                    $data['delivery_date'] =  $_REQUEST['deliveryDate'];

                if($this->userModel->createOrder($data)){
                  $this->removeAllCookie();
                  header('Location:'. URLROOT . '/orderdone');
                }else{
                  echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
                }  

          }else{
            $data['address'] = trim($_POST['address']);
            $data['city'] = trim($_POST['city']);
            $data['state'] = trim($_POST['state']);
            $data['pincode'] = trim($_POST['pincode']);
            $data['landmark'] = trim($_POST['landmark']);
            $data['type'] = trim($_POST['type']);
            $data['user'] = $_SESSION['user_secret_name'];
            $data['name'] = trim($_POST['name']);
            $data['mobile'] = trim($_POST['mobile']);
            
            if($this->userModel->addCartAddress($data)){
              header('Location: '.$_SERVER['REQUEST_URI']);
            }else{
              echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
            }
          }
            
        }
          $this->view('Cart_summary', $data);
        }else
          $this->view('emptyCart', $data);
      }
      else{
        header('Location:'. URLROOT . '/login');
      }

    }
    
    public function getSlugArray(){
      $medicine = $this->medcineModel->getMedicine();
      $resultMed = [];
      foreach($medicine as $med){
          foreach ($_COOKIE as $key=>$val){
            if($val == 'medicine'){
              if($med->name_slug === $key){
                $resultMed[] = $med->name_slug;
              }
            }
          }
      }
      $resultMed = implode(', ',$resultMed);
      return $resultMed;
    }

    public function removeAllCookie(){
      $past = time() - 3600;
          foreach ($_COOKIE as $key=>$val){
            if($val == 'medicine'){
                setcookie($key, "", 1, '/');
            }
          }
    }

    public function getMedicineByForCart(){
      $medicine = $this->medcineModel->getMedicine();
      $resultMed = [];
      foreach($medicine as $med){
          foreach ($_COOKIE as $key=>$val){
            if($val == 'medicine'){
              if($med->name_slug === $key){
                $resultMed[] = $med;
              }
            }
          }
      }
      return $resultMed;
    }

    public function getCalculatedPrice($data){
      $result = [
        'mrp' => 0,
        'sel' => 0,
        'dis' => 0,
        'disPer' => 0,
      ];
      
      foreach($data as $item){
        $result['mrp'] += $item->s_price;
        $result['sel'] += $item->m_price;
      }
      $result['dis'] = $result['mrp'] - $result['sel'];
      $result['disPer'] = intval((($result['mrp'] -  $result['sel'])*100) / $result['mrp']);

      return $result;
    }

    public function search(){
      $data = ['title' => 'Search'];
      if(isset($_GET['s'])){
        $search = $this->medcineModel->getSearchData($_GET['s']);
        $data = [
          'title' => 'Search Result for '.$_GET['s'],
          'termname'=> 'Medicine One',
          'count'=> '250',
          'categoryList' => $this->medcineModel->getCategories(),
          'medcineList' => $search,
          'url' => '',
          ];
          $this->view('Category',$data);
      }else
        $this->view('404',$data);
    }

    public function register(){
        $data = [
            'title' => 'Sign up',
            'name' => '',
            'email' => '',
            'mobile' => '',
            'pass' => '',
            're_pass' => '',
            'nameError' => '',
            'emailError' => '',
            'mobileError' => '',
            'passError' => '',
            'rePassError' => '',
          ];
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'title' => 'Sign up',
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'mobile' => trim($_POST['mobile']),
                'pass' => trim($_POST['pass']),
                're_pass' => trim($_POST['re_pass']),
                'nameError' => '',
                'emailError' => '',
                'mobileError' => '',
                'passError' => '',
                'rePassError' => '',
              ];

              $nameValidation = "/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/";
              $passValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
              
              if(empty($data['name'])){
                $data['nameError'] = 'Please enter username';
              }elseif(!preg_match($nameValidation, $data['name'])){
                $data['nameError'] = 'Name can only contain latters';
              }

              if(empty($data['email'])){
                $data['emailError'] = 'Please enter emil address';
              }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailError'] = 'Please enter valid email';
              }
              else{
                  if($this->userModel->findUserbyEmail($data['email'])){
                    $data['emailError'] = 'This email allready exsits';
                  }
              }

              if(empty($data['mobile'])){
                $data['mobileError'] = 'Please enter mobile number';
              }elseif(!is_numeric($data['mobile'])){
                $data['mobileError'] = 'Please enter valid mobile number';
              }
              elseif(strlen($data['mobile']) < 10){
                $data['mobileError'] = 'Please enter valid mobile number';
              }
              else{
                  if($this->userModel->findUserbyMobile($data['mobile'])){
                    $data['mobileError'] = 'This mobile allready exsits';
                  }
              }

              if(empty($data['pass'])){
                $data['passError'] = 'Please enter password';
              }elseif(strlen($data['pass']) < 6){
                $data['passError'] = 'Password must be t least 8 characters';
              }
              elseif(preg_match($passValidation, $data['pass'])){
                $data['passError'] = 'Password must have one numeric values with a latter';
              }

              if(empty($data['re_pass'])){
                $data['rePassError'] = 'Please re enter the password';
              }else{
                if($data['pass'] != $data['re_pass']){
                    $data['rePassError'] = 'Password do not match, please try again';
                }
              }
              
                if(empty($data['nameError'])&&empty($data['emailError'])&&empty($data['mobileError'])&&empty($data['passError'])&&empty($data['rePassError'])){
                    $tempPassword = $data['pass'];
                    $data['pass'] = sha1($data['pass']);
                    if($this->userModel->register($data)){
                      $loggedInUser = $this->userModel->login($data['email'], $tempPassword);
                      if($loggedInUser){
                        $this->createUserSession($loggedInUser);
                      }else{
                        header('Location: ' .URLROOT.'/login');
                      }
                    }else{
                        die("<script>alert('Something went wrong!')</script>");
                    }
                }
          }
          if(isAuth() != 0){
            header('Location:'. URLROOT . '/dashboard');
          }else
            $this->view('Register',$data);
    }
    
    public function login(){
        $data = [
            'title' => 'Sign in',
            'username' => '',
            'password' => '',
            'nameError' => '',
            'passError' => '',
          ];
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data['username'] = trim($_POST['username']);
            $data['password'] = trim($_POST['password']);

            if(empty($data['username'])){
              $data['nameError'] = 'Please enter your Email or Mobile';
            }

            if(empty($data['password'])){
              $data['passError'] = 'Please enter your Password';
            }

            if(empty($data['nameError']) && empty($data['passError'])){
              $loggedInUser = $this->userModel->login($data['username'], $data['password']);
              if($loggedInUser){
                $this->createUserSession($loggedInUser);
              }else{
                $data['passError'] = "Password or Username is incorrect";
              }
            }

          }
          
          if(isAuth() != 0){
            header('Location:'. URLROOT . '/dashboard');
          }else
            $this->view('Login',$data);

    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_name'] = $user->name;
      $_SESSION['user_mobile'] = $user->mobile;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_type'] = $user->user_type;
      $_SESSION['user_img'] = $user->user_img;
      $_SESSION['user_status'] = $user->status;
      $_SESSION['user_secret_name'] = $user->user_name;
      $_SESSION['user_secret_id'] = $user->user_secret_id;
      $this->userModel->saveLoginData();
      header('Location:'. URLROOT . '/dashboard');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_name']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_mobile']);
      unset($_SESSION['user_type']);
      unset($_SESSION['user_status']);
      unset($_SESSION['user_secret_name']);
      unset($_SESSION['user_secret_id']);
      unset($_SESSION['user_img']);
      header('Location:'. URLROOT);
    }


    
    public function userName(){
        $users = $this->userModel->getUsers();
        $data = ['users' => $users];
        $this->view('User', $data);
    }
    
    public function getUrl(){
      if(isset($_GET['url'])){
          $url = rtrim($_SERVER['REQUEST_URI'],'/');
          $url = filter_var($url, FILTER_SANITIZE_URL);
          $url = explode('/',$url);
          return $url;
      }
      else{
          return [];
      }
    }

}?>