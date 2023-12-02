<?php 
    require_once('../models/userModel.php');

    $username = $_POST['username'];
    $status = deleteEmployee($username);
    if($status){
        header('location: ../views/adminHome.html')
    }
    else{
        echo "Invalid Username";
    }


?>