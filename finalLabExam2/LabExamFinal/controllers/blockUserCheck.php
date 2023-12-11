<?php
    require_once('../models/userModel.php');

    $userName = $_REQUEST['userName'];

    $status = blockUser($userName);
    if($status){
        echo "Success";
        header("location: ../views/adminHome.html");
    }else{
        echo "Failure";
    }

    
?>