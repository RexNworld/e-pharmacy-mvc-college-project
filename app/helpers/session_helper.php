<?php
    session_start();

    function isAuth(){
        if(isset($_SESSION['user_id'])){
            return true;
        }
        else{
            return false;
        }
    }

    function addToCart($product){
        die("Now");
        setcookie( "TestCookie", $product, strtotime( '+30 days' ) );
    }