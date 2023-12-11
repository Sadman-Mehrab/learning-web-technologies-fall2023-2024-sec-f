<?php
    session_start();
    require_once('../models/userModel.php');
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];

    if($userName == "" || $password == "" ){
        echo "Empty userName or password!";
        
    }else{
        $status = login($userName, $password);
        if ($status){
            $_SESSION['currentUserName'] = $userName;
            if($status['type'] == 'Admin'){
                header("location: ../views/adminHome.html");
            }else if($status['type'] == 'Buyer'){
                header("location: ../views/buyerHome.html");
            }else if($status['type'] == 'Seller'){
                header("location: ../views/sellerHome.html");
            }


        }else{
            echo "Invalid Username or Password!";
        }
    }
?>