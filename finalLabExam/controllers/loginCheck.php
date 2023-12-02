<?php
    require_once('../models/userModel.php');
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];

    if($userName == "" || $password == "" ){
        echo "Empty userName or password!";
        
    }else{
        $status = login($userName, $password);
        if ($status){
            
            header("location: ../views/adminHome.html");

        }else{
            echo "Invalid User!";
        }
    }
?>