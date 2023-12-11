<?php
    require_once('../models/userModel.php');

    $userName = $_REQUEST['userName'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    $type = $_REQUEST['type'];
    $active = "True";

    $user = ['userName' => $userName, 'password' => $password, 'type' => $type, 'phone' => $phone, 'active' => $active];
    $status = register($user);
    if($status){
        echo "Success";
        header("location: ../views/login.html");
    }else{
        echo "Failure";
    }

    
?>