<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "highlighthd_main";

    $conn = new mysqli($host,$user,$password,$dbname);
    if($conn->connect_error)
        die("Connection Error".$conn->connect_error);
    
    // return $conn;
?>