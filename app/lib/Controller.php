<?php
class Controller{

    public function model($model){
        require_once './app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view, $data = []){
        if(get_called_class() == 'Dashboard'){
            if(isAuth() != 0){
                // $this->saveLoginData();
                if($_SESSION['user_type'] == 'SUPERADMIN'){
                    require_once './views/dashboard/layouts/Header.php';
                    require_once './views/dashboard/layouts/Sidebar.php';
                    require_once './views/dashboard/layouts/Topbar.php';
                    if(file_exists('./views/dashboard/'.$view.'.php')){
                        require_once './views/dashboard/'.$view.'.php';
                    }else
                        require_once './views/dashboard/404.php';
                    require_once './views/dashboard/layouts/Footer.php';
                }
                else
                header('Location:'. URLROOT);
                
            }
          else
            header('Location:'. URLROOT . '/login');
        }
        else if(file_exists('./views/'.$view.'.php')){
            if($view == 'Register'){
                require_once './views/'.$view.'.php';
            }
            else if($view == 'Login'){
                require_once './views/'.$view.'.php';
            }
            else{
                require_once './views/layouts/Header.php';
                require_once './views/layouts/Topbar.php';
                require_once './views/'.$view.'.php';
                require_once './views/layouts/Footer.php';
            }
            
            
        }
    }

}