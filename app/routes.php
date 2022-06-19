<?php
class Routes{
    public $url = '';
    public $route = '';

    public function get(){
         $url = '/';   
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // $url = explode('/',$url);
            // print_r($url);
            // return $url;
        }
        switch ($url){
            case '/':
                return 'index';
            case 'home':
                return 'index';
            case 'about':
                return 'about';
            case 'user':
                return 'user';
            case 'product':
                return 'index';
            case 'category':
                return 'index';
            case 'contact':
                return 'contact';
            case 'cart':
                return 'cart';
            case 'emptyCart':
                return 'cart';
            case 'cart-summary':
                return 'cartSummary';
            case 'orderdone':
                return 'orderdone';
            case 'orders':
                return 'order';
            case 'search':
                return 'search';
            case 'profile':
                return 'profile';
            case 'register':
                return 'register';
            case 'login':
                return 'login';
            // Admin Panel
            case 'dashboard':
                return 'index';
            case 'logout':
                    return 'logout';
            default:
                return 'errorPage';
        }
    }
}