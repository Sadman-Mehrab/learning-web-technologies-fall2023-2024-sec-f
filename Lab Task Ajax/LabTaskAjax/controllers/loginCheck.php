<?php
    session_start();
    require_once('../models/personModel.php');
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($email == "" || $password == "" ){
        echo "Empty email or password!";
        
    }else{
        $status = login($email, $password);
        if ($status){    
            $_SESSION['currentEmail'] = $email;
            header("location: ../views/home.php");
            
        }else{
            header("location: ../views/register.php");
            
        }
    }
?>