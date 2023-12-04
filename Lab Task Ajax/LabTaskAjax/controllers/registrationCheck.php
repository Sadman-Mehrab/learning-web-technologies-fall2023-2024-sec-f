<?php
    require_once('../models/personModel.php');

    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];


    $person = ["name" => $name , "phone" => $phone, "email" => $email, "password" => $password];
    $status = registerPerson($person);

    if($status){
        header("location: ../views/login.php");
    }
?>