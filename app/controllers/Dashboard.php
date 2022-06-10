<?php
class Dashboard extends Controller{

    private $uploader;
    
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->uploader = new Uploader;
    }
    
    public function index(){
            $this->view('index');
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
              
                if($_FILES['image']['name'] && $_FILES['image']['name']){
                    $uploadResult = $this->uploader->upload($_FILES['image'],strstr($data['email'],'@', true),'profile_images');
                    $data['image'] = 'profile_images'.'/'.strstr($data['email'],'@', true).'/'.$uploadResult[0];
                }else{
                    $data['image'] = $result[0]->user_img;
                    $uploadResult[0] = '';
                    $uploadResult[1] = 1;
                }
              
                $tempPassword = $data['pass'];
              $data['pass'] = sha1($data['pass']);


              if($this->userModel->register($data)){
                  header('Location: '.$_SERVER['REQUEST_URI']);
              }else{
                  $data = [
                      'title' => 'Users',
                      'allUser' => $users,
                  ];
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
                    'title' => 'Edit Users',
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
                                $data = [
                                    'title' => 'Edit Users',
                                    'userData' => $result,

                                ];
                                echo '<script>alert("Somethning Went wrong PLease try agan")</script>';
                            }
                        }
                        else{
                            $data = [
                                'title' => 'Edit Users',
                                'userData' => $result,
                                'imageError' => $uploadResult[0],
                            ];
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
        $this->view('doctors');
    }

    public function orders(){
        $this->view('orders');
    }

    public function medicine(){
        $this->view('medicine');
    }

    public function appointment(){
        $this->view('appointment');
    }

    public function feedback(){
        $this->view('feedback');
    }

    public function profile(){
        $this->view('profile');
    }
    
    public function errorPage(){
        $this->view('404');
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
}