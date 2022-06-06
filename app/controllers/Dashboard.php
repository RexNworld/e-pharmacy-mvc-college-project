<?php
class Dashboard extends Controller{

    public function __construct(){
        $this->userModel = $this->model('User');
        // $this->view('Header');
    }
    
    public function index(){
            $this->view('index');
    }

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
          if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addUser'])){
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'mobile' => trim($_POST['mobile']),
                'pass' => trim($_POST['pass']),
                'image' => trim($_POST['image']),
                'nameError' => '',
                'emailError' => '',
                'mobileError' => '',
                'passError' => '',
              ];

              if(empty($data['nameError'])&&empty($data['emailError'])&&empty($data['mobileError'])&&empty($data['passError'])){
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
                    'email' => '',
                    'mobile' => '',
                    'pass' => '',
                    'image' => '',
                    'nameError' => '',
                    'emailError' => '',
                    'mobileError' => '',
                    'passError' => '',
                  ];

                  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editUser'])){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    // var_dump($_POST);
                    // echo $result[0]->mobile;
                    if(isset($_POST['name']) && !empty($_POST['name'])){
                       $name = $_POST['name'];
                    }else
                       $name = $result[0]->name;
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
                    if(isset($_POST['image']) && !empty(trim($_POST['image'])))
                        $image = $_POST['image'];
                    else
                        $image = $result[0]->user_img;
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
                      'mobile' => $mobile,
                      'pass' => $pass,
                      'image' => $image,
                      'user_type' => $user_type,
                      'status' => $status,
                      'nameError' => '',
                      'emailError' => '',
                      'mobileError' => '',
                      'passError' => '',
                    ];

                    if(empty($data['nameError'])&&empty($data['emailError'])&&empty($data['mobileError'])&&empty($data['passError'])){
                        if($this->userModel->editUser($data)){
                            header('Location: '.$_SERVER['REQUEST_URI']);
                        }else{
                            $data = [
                                'title' => 'Edit Users',
                                'userData' => $result,
                            ];
                            echo '<script>alert("Hellow Sexy")</script>';
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