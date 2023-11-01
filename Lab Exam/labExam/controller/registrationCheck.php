<?php 
    require_once('../model/userModel.php');
    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $name = $_REQUEST['name'];
    $type = $_REQUEST['type'];

    if($id == "" || $password == "" || $confirmPassword == "" || $name == "" || $type == "" ){
        echo "null id or name or password or type!";
    }
    else if($confirmPassword != $password){
        echo "passwords dont match!";
    }
    else if(strlen($password) < 8){
        echo "password must be atleast 8 characters!";
    }
    
    else{
        $user = ['id'=> $id, 'password'=> $password, 'name'=>$name, 'type' => $type];
        $status = registerUser($user);
        if($status){
            echo "registration successful!";
        }
        else{
            echo "registration unsuccessful!";
        }
            

        header('location: ../view/login.html');
    }
?>