<?php
class Dashboard extends Controller{

    private $uploader;
    
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->medcineModel = $this->model('Medicine');
        $this->uploader = new Uploader;
    }
    
    public function index(){
            $users = $this->userModel->getUsers();
            $data = [
                'title' => 'Dashboard',
                'allUser' => $users,
                'allmed' => $this->medcineModel->getMedicine(),
                'alltag' => $this->medcineModel->getCategories(),
            ];
            $this->view('index', $data);
    }
    public function adduser(){
        $data = [
            'title' => 'Add User',
            'name' => '',
            'email' => '',
            'mobile' => '',
            'pass' => '',
            'image' => '',
            'user_type' => '',
            'nameError' => '',
            'emailError' => '',
            'mobileError' => '',
            'passError' => '',
            'imageError' => '',
          ];

          if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Add User',
              'name' => trim($_POST['name']),
              'email' => trim($_POST['email']),
              'mobile' => trim($_POST['mobile']),
              'pass' => trim($_POST['pass']),
              'user_type' => trim($_POST['user_type']),
              'image' => trim($_FILES['image']['name']),
              'imageError' => '',
              'nameError' => '',
              'emailError' => '',
              'mobileError' => '',
              'passError' => '',
            ];
            
            $nameValidation = "/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/";
              
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
              }
            if(empty($data['nameError'])&&empty($data['emailError'])&&empty($data['mobileError'])&&empty($data['passError'])){
              
                if($_FILES['image']['name']){
                    $uploadResult = $this->uploader->upload($_FILES['image'],strstr($data['email'],'@', true) ,'profile_images');
                    $data['image'] = 'profile_images'.'/'.strstr($data['email'],'@', true).'/'.$uploadResult[0];
                }else{
                    $data['image'] = 'profile_images/default.jpg';
                    $uploadResult[0] = '';
                    $uploadResult[1] = 1;
                }
              
                $tempPassword = $data['pass'];
                $data['pass'] = sha1($data['pass']);

              if($this->userModel->register($data)){
                  header('Location: '.$_SERVER['REQUEST_URI']);
              }else{
                  $data['allUser'] = $users;
                  echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
              }
          }
        }

        $this->view('userAdd', $data);
    }

    // For Listing  All User Details
    public function users(){
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Users',
            'allUser' => $users,
            'name' => '',
            'email' => '',
            'mobile' => '',
            'pass' => '',
            'image' => '',
            'nameError' => '',
            'emailError' => '',
            'mobileError' => '',
            'passError' => '',
          ];

          if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url); 
            
          }
          if(isset($url[2])){
            if($result = $this->userModel->getUser($url[2])){
                $data = [
                    'title' => 'Edit Users - '.$result[0]->name,
                    'userData' => $result,
                    'name' => '',
                    'username' => '',
                    'email' => '',
                    'mobile' => '',
                    'pass' => '',
                    'image' => '',
                    'nameError' => '',
                    'emailError' => '',
                    'mobileError' => '',
                    'passError' => '',
                    'imageError' => [],
                  ];

                  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editUser'])){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    // var_dump($_POST);
                    // echo $result[0]->mobile;
                    if(isset($_POST['name']) && !empty($_POST['name'])){
                       $name = $_POST['name'];
                    }else
                       $name = $result[0]->name;

                    if(isset($_POST['username']) && !empty(trim($_POST['username'])))
                       $username = $_POST['username'];
                   else
                       $username = $result[0]->user_name;

                    if(isset($_POST['email']) && !empty(trim($_POST['email'])))
                        $email = $_POST['email'];
                    else
                        $email = $result[0]->mobile;

                    if(isset($_POST['mobile']) && !empty(trim($_POST['mobile'])))
                        $mobile = $_POST['mobile'];
                    else
                        $mobile = $result[0]->mobile;

                    if(isset($_POST['pass']) && !empty(trim($_POST['pass'])))
                        $pass = sha1($_POST['pass']);
                    else
                        $pass = $result[0]->password;

                    if(isset($_POST['user_type']) && !empty(trim($_POST['user_type'])))
                        $user_type = $_POST['user_type'];
                    else
                        $user_type = $result[0]->user_type;
                        
                    if(isset($_POST['status']) && !empty(trim($_POST['status'])))
                        $status = $_POST['status'];
                    else
                        $status = $result[0]->status;
                   
                    $data = [
                        'title' => 'Edit User - '. $name,
                        'user_id' => $url[2],
                        'name' => $name,
                        'email' => $email,
                        'username' => $username,
                        'mobile' => $mobile,
                        'pass' => $pass,
                        'user_type' => $user_type,
                        'status' => $status,
                        'image' => '',
                        'nameError' => '',
                        'emailError' => '',
                        'mobileError' => '',
                        'passError' => '',
                        'imageError' => '',
                        ];
                    try{
                        if(!$_FILES){
                            throw new UnexpectedValueException('There was a problem with the upload');
                        }
                    }catch(Exception $exec){
                        echo $exec->getMessage();
                        exit();
                    }

                    if(empty($data['nameError'])&&empty($data['emailError'])&&empty($data['mobileError'])&&empty($data['passError']) && empty($data['imageError'])){

                        if($_FILES['image']['name'] && $_FILES['image']['name']){
                            $uploadResult = $this->uploader->upload($_FILES['image'],$data['username'],'profile_images');
                            $data['image'] = 'profile_images'.'/'.$result[0]->user_name.'/'.$uploadResult[0];
                        }else{
                            $data['image'] = $result[0]->user_img;
                            $uploadResult[0] = '';
                            $uploadResult[1] = 1;
                        }
                        // die();
                        if($uploadResult[1] !==  0){
                            if($this->userModel->editUser($data)){
                                header('Location: '.$_SERVER['REQUEST_URI']);
                            }else{
                                echo '<script>alert("Somethning Went wrong PLease try agan")</script>';
                            }
                        }
                        else{
                            $data['imageError'] = $uploadResult[0];
                        }
                    }
                  }
                $this->view('userEdit', $data);
            }
            else
                $this->view('404', $data);
          }elseif(isset($url[1]))
            $this->view('users', $data);
    }

    public function productDetails(){
        $this->view('productDetails');
    }

    public function doctors(){
        $data['title'] = 'Doctors List';
        $this->view('doctors',$data);
    }

    public function orders(){
        $data['title'] = 'Order List';
        $this->view('orders',$data);
    }

    public function medicine(){
        $data=[
            'title' => 'Medicine List',
            'categoryList'=> $this->medcineModel->getCategories(),
            'medicineList'=> $this->medcineModel->getMedicine(),
            'c_name'=>'',
            'c_slug'=>'',
            'c_image'=>'',
            'c_Error'=>'',
            'c_imageError'=>'',
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['c_name'] = trim($_POST['c_name']);
            $data['c_slug'] = trim($_POST['c_slug']);
            $data['c_image'] = trim($_FILES['c_image']['name']);

            if(empty($data['c_name']))
                $data['c_Error'] = "Please enter Category Name before add";
            elseif($this->medcineModel->findExistingCategory($data['c_slug']))
                $data['c_Error'] = "Entered Category Allready Exsists";

            if(empty($data['c_name']))
                $data['c_imageError'] = "Category required an Image";

                if(empty($data['c_Error']) && empty($data['c_imageError'])){
                if($_FILES['c_image']['name']){
                    $uploadResult = $this->uploader->upload($_FILES['c_image'],$data['c_slug'],'category_images');
                    $data['c_image'] = 'category_images'.'/'.$data['c_slug'].'/'.$uploadResult[0];
                }else{
                    $data['c_image'] = 'category_images/default.jpg';
                    $uploadResult[0] = '';
                    $uploadResult[1] = 1;
                }
                if($uploadResult[1] !==  0){
                    if($this->medcineModel->addCategory($data)){
                        header('Location: '.$_SERVER['REQUEST_URI']);
                    }else{
                        echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
                    }
                }else{
                    $data['c_imageError'] = $uploadResult[0];
                }
            }
        }

        $this->view('medicine',$data);
    }

    public function addMedicine(){
        $data=[
            'title' => 'Add Medicine',
            'categoryList'=> $this->medcineModel->getCategories(),
            
            'm_name'=>'',
            'name_slug'=>'',
            'm_short_dec'=>'',
            'm_price'=>'',
            'm_m_price'=>'',
            'm_p_date'=>'',
            'm_e_date'=>'',
            'm_stock'=>'',
            'm_description'=>'',
            'm_image'=>'',
            'm_categories' => '',
            
            'm_nameError'=>'',
            'm_short_decError'=>'',
            'm_imageError'=>'',
            'm_priceError'=>'',
            'm_m_priceError'=>'',
            'm_p_dateError'=>'',
            'm_e_dateError'=>'',
            'm_stockError'=>'',
            'm_descriptionError'=>'',
            'm_categoriesError'=>'',
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['m_name'] = trim($_POST['m_name']);
            $data['name_slug'] = str_replace(' ', '-',strtolower(trim($_POST['m_name'])));
            $data['m_short_dec'] = trim($_POST['m_short_dec']);
            $data['m_price'] = trim($_POST['m_price']);
            $data['m_m_price'] = trim($_POST['m_m_price']);
            $data['m_p_date'] = trim($_POST['m_p_date']);
            $data['m_e_date'] = trim($_POST['m_e_date']);
            $data['m_stock'] = trim($_POST['m_stock']);
            $data['m_description'] = trim($_POST['m_description']);
            if(isset($_POST['m_categories'])){
                foreach ($_POST['m_categories'] as $x)
                    $tagArray[] =  $x;
                $data['m_categories'] = implode(',',$tagArray);
            }
            if(empty($data['m_categories'])){
                $data['m_categoriesError'] = "Please Select at least One Category";
            }
            if(empty($data['m_name']))
                $data['m_nameError'] = "Please Enter The Name of the product";
            elseif($this->medcineModel->findExistingMedicine($data['name_slug']))
                $data['m_nameError'] = "Entered Medicine Allready Exsists";

            // if (count(array_filter($_FILES['upload_file']['name'])) < 3) 
            if (empty(array_filter($_FILES['upload_file']['name']))) 
                $data['m_imageError'] = 'Please Select at least 3 Image of the product';

            if(empty($data['m_short_dec']) && strlen($data['m_short_dec']) < 3)
                $data['m_short_decError'] = "Please provide a small description about the product";
            
            if(empty($data['m_price']))
                $data['m_priceError'] = "Please enter Maximum retail price";
            if(empty($data['m_m_price']))
                $data['m_m_priceError'] = "Please enter Maximum retail price";

            if(empty($data['m_p_date']))
                $data['m_p_dateError'] = "Please provide Pakeging date of the Product";
            if(empty($data['m_e_date']))
                $data['m_e_dateError'] = "Please provide Expiry date of the Product";

            if(empty($data['m_stock']))
                $data['m_stockError'] = "Please enter total stock of the product";
            
            if(empty($data['m_description']))
                $data['m_descriptionError'] = "Please enter more details about the product";
            
                if(empty($data['m_nameError']) && empty($data['m_imageError']) && empty($data['m_short_decError']) && empty($data['m_priceError']) && empty($data['m_m_priceError']) && empty($data['m_p_dateError']) && empty($data['m_e_dateError'])&& empty($data['m_stockError'])&& empty($data['m_descriptionError']) ){
                if($_FILES['upload_file']['name']){
                    if(!empty(array_filter($_FILES['upload_file']['name']))){
                        $uploadResult = $this->uploader->uploadAll($_FILES['upload_file'],date("Y").'/'.date('m'),'medicine_images');
                        foreach ($uploadResult as $x){
                            $imageArray[] = 'medicine_images'.'/'.date("Y").'/'.date('m').'/'.$x[0];
                            if($x[1] !== 1){
                                $uploadResult[0]  = $x[0];
                                $uploadResult[1] = 0;
                            }
                        }
                        $data['m_image'] = implode(',',$imageArray);
                    }
                }else{
                    $data['m_image'] = 'category_images/default.jpg';
                    $uploadResult[0] = '';
                    $uploadResult[1] = 1;
                }
                if($uploadResult[1] !==  0){
                    if($this->medcineModel->addMedicine($data)){
                        header('Location: '.$_SERVER['REQUEST_URI']);
                    }else{
                        echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
                    }
                }else{
                    $data['m_imageError'] = $uploadResult[0];
                }
            }
        }
        $this->view('addMedicine',$data);
    }

    public function deleteMedicine(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url); 
            if($this->medcineModel->deleteMedicine($url[2])){
                header('Location:'. URLROOT.'/dashboard/medicine');
            }else{
                header('Location:'. URLROOT.'/dashboard/medicine/404');
            }
        }else{
            header('Location:'. URLROOT.'/dashboard/medicine/404');
        }
    }
      
    public function editMedicine(){
         $url = $this->getUrl();
         $c = count($url);
         if($c !== 5)
            $this->errorPage();

        $data=[
            'title' => 'Edit Medicine',
            'medicineDetails'=> $this->medcineModel->getMedicineByTag($url[$c-1]),
            'categoryList' => $this->medcineModel->getCategories(),

            'm_name'=>'',
            'name_slug'=>'',
            'm_short_dec'=>'',
            'm_price'=>'',
            'm_m_price'=>'',
            'm_p_date'=>'',
            'm_e_date'=>'',
            'm_stock'=>'',
            'm_description'=>'',
            'm_image'=>'',
            'm_categories' => '',
            
            'm_nameError'=>'',
            'm_short_decError'=>'',
            'm_imageError'=>'',
            'm_priceError'=>'',
            'm_m_priceError'=>'',
            'm_p_dateError'=>'',
            'm_e_dateError'=>'',
            'm_stockError'=>'',
            'm_descriptionError'=>'',
            'm_categoriesError'=>'',
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['m_name'] = trim($_POST['m_name']);
            $data['name_slug'] = str_replace(' ', '-',strtolower(trim($_POST['m_name'])));
            $data['m_short_dec'] = trim($_POST['m_short_dec']);
            $data['m_price'] = trim($_POST['m_price']);
            $data['m_m_price'] = trim($_POST['m_m_price']);
            $data['m_p_date'] = trim($_POST['m_p_date']);
            $data['m_e_date'] = trim($_POST['m_e_date']);
            $data['m_stock'] = trim($_POST['m_stock']);
            $data['m_description'] = trim($_POST['m_description']);
            if(isset($_POST['m_categories'])){
                foreach ($_POST['m_categories'] as $x)
                    $tagArray[] =  $x;
                $data['m_categories'] = implode(',',$tagArray);
            }
            if(empty($data['m_categories'])){
                $data['m_categoriesError'] = "Please Select at least One Category";
            }
            if(empty($data['m_name']))
                $data['m_nameError'] = "Please Enter The Name of the product";

            // if (count(array_filter($_FILES['upload_file']['name'])) < 3) 
            if (empty(array_filter($_FILES['upload_file']['name']))) 
                $data['m_imageError'] = 'Please Select at least 3 Image of the product';

            if(empty($data['m_short_dec']) && strlen($data['m_short_dec']) < 3)
                $data['m_short_decError'] = "Please provide a small description about the product";
            
            if(empty($data['m_price']))
                $data['m_priceError'] = "Please enter Maximum retail price";
            if(empty($data['m_m_price']))
                $data['m_m_priceError'] = "Please enter Maximum retail price";

            if(empty($data['m_p_date']))
                $data['m_p_dateError'] = "Please provide Pakeging date of the Product";
            if(empty($data['m_e_date']))
                $data['m_e_dateError'] = "Please provide Expiry date of the Product";

            if(empty($data['m_stock']))
                $data['m_stockError'] = "Please enter total stock of the product";
            
            if(empty($data['m_description']))
                $data['m_descriptionError'] = "Please enter more details about the product";
            
            // var_dump($_POST);
            // die();
                if(empty($data['m_nameError']) && empty($data['m_imageError']) && empty($data['m_short_decError']) && empty($data['m_priceError']) && empty($data['m_m_priceError']) && empty($data['m_p_dateError']) && empty($data['m_e_dateError'])&& empty($data['m_stockError'])&& empty($data['m_descriptionError']) ){
                if($_FILES['upload_file']['name']){
                    if(!empty(array_filter($_FILES['upload_file']['name']))){
                        $uploadResult = $this->uploader->uploadAll($_FILES['upload_file'],date("Y").'/'.date('m'),'medicine_images');
                        foreach ($uploadResult as $x){
                            $imageArray[] = 'medicine_images'.'/'.date("Y").'/'.date('m').'/'.$x[0];
                            if($x[1] !== 1){
                                $uploadResult[0]  = $x[0];
                                $uploadResult[1] = 0;
                            }
                        }
                        $data['m_image'] = implode(',',$imageArray);
                    }
                }else{
                    $data['m_image'] = 'category_images/default.jpg';
                    $uploadResult[0] = '';
                    $uploadResult[1] = 1;
                }
                if($uploadResult[1] !==  0){
                    $data = [
                        'm_name'=>$data['m_name'],
                        'name_slug'=>$data['name_slug'],
                        'm_short_dec'=>$data['m_short_dec'],
                        'm_price'=>$data['m_price'],
                        'm_m_price'=>$data['m_m_price'],
                        'm_p_date'=>$data['m_p_date'],
                        'm_e_date'=>$data['m_e_date'],
                        'm_stock'=>$data['m_stock'],
                        'm_description'=>$data['m_description'],
                        'm_image'=>$data['m_image'],
                        'm_categories' => $data['m_categories'],
                    ];
                    if($this->medcineModel->editMedicine($data)){
                        header('Location: '.$_SERVER['REQUEST_URI']);
                    }else{
                        echo '<script>alert("Something Went wrong. Please Re open your browser")</script>';
                    }
                }else{
                    $data['m_imageError'] = $uploadResult[0];
                }
            }
        }
        $this->view('editMedicine',$data);
    }
    public function appointment(){
        $this->view('appointment');
    }

    public function feedback(){
        $data =[
            'title' => 'Feedback',
            'user' => '$data',
        ];
        $this->view('feedback',$data);
    }

    public function profile(){
        $data =[
            'title' => 'My Profle',
            'user' => '$data',
        ];
        $this->view('profile',$data);
    }
    
    public function errorPage(){
    $data['title'] = 'Page Not Found';
        $this->view('404',$data);
        die();
    }

    public function deleteUser(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url); 
            if($this->userModel->deleteUser($url[2])){
                header('Location:'. URLROOT.'/dashboard/users');
            }else{
                header('Location:'. URLROOT.'/dashboard/users/404');
            }
        }else{
            header('Location:'. URLROOT.'/dashboard/users/404');
        }
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
}