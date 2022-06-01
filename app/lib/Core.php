<?php

//Core Ap class
class Core{
    protected $currentControler = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $routes = new Routes;
        $this->currentMethod = $routes->get();
        
        $url = $this->getUrl();
        //We are looking to our controllers for first value ucwords will capitalized first latter
        if(file_exists('./app/controllers/'.ucwords($url[0]).'.php')){
            // We will set a new controller
            $this->currentControler = ucwords($url[0]);
            unset($url[0]);
        }

        // Require controller
        require_once './app/controllers/'.$this->currentControler. '.php';
        $this->currentControler = new $this->currentControler;  
        
        // Check for secound part of the url
        if(isset($url[1])){
            if(method_exists($this->currentControler, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // Get Parameters
        $this->params = $url ? array_values($url) : [];

        // Call a callback with method of rray
        call_user_func_array([$this->currentControler, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}