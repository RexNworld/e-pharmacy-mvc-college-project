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
    function countCart(){
        $count = 0;
        foreach ($_COOKIE as $key=>$val){
            // echo $key.' is '.$val."<br>\n";
            if($val == 'medicine'){
                $count++;  
            }
        }
        return $count;
    }