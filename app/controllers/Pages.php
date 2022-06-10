<?php
class Pages extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        $data = [
          'title' => 'Home Page',  
          'author' => 'Reshav Sahani',  
          'date' => '23/05/2022',
        ];
        $this->view('Home',$data);        
    }

    public function about(){
        $this->view('About');        
    }

    public function product_details(){
      $this->view('Product_details');        
  }

    public function category(){
      $data = [
        'title' => 'Category',
        'termname'=> 'Medicine One',
        'count'=> '250',

      ];
      $this->view('Category',$data);        
  }

  public function profile(){
    $this->view('user_profile');        
}
   
    public function errorPage(){
        $this->view('404');
    }

    public function user(){
        $users = $this->userModel->getUsers();
        $data = ['users' => $users];
        $this->view('User', $data);
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
                        die("Something went wrong!");
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
            
            $data = [
              'title' => 'Sign in',
              'username' => trim($_POST['username']),
              'password' => trim($_POST['password']),
              'nameError' => '',
              'passError' => '',
            ];

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

          }else{
            $data = [
              'username' => '',
              'password' => '',
              'nameError' => '',
              'passError' => '',
            ];
          }
          if(isAuth() != 0){
            header('Location:'. URLROOT . '/dashboard');
          }else
            $this->view('Login',$data);

    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_name'] = $user->name;
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
      unset($_SESSION['user_type']);
      unset($_SESSION['user_status']);
      unset($_SESSION['user_secret_name']);
      unset($_SESSION['user_secret_id']);
      header('Location:'. URLROOT);
    }


    
    public function userName(){
        $users = $this->userModel->getUsers();
        $data = ['users' => $users];
        $this->view('User', $data);
    }
    

}?>