<?php
class Dashboard extends Controller{

    public function __construct(){
        $this->myModel = $this->model('User');
        // $this->view('Header');
    }
    
    public function index(){
            $this->view('index');
    }

    public function users(){
        $users = $this->myModel->getUsers();
        $data = ['users' => $users];
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
}