<?php 
    require_once('../models/personModel.php');

    $email = $_REQUEST['email'];
    $status = checkEmail($email);

    

    if($status){
        echo "Not Available";
    }else{
        echo "Available";
    }


    

?>