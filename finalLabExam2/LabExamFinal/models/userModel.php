<?php

    require_once('db.php');



    function login($userName, $password){
        $con = getConnection();
        $sql = "select * from Users where userName='{$userName}' and password='{$password}'";
        $result = mysqli_query($con, $sql);

        if(!$result){
            return false;
        }

        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }

    function register($user){
        $con = getConnection();

        $userName = $user['userName'];
        $phone = $user['phone'];
        $password = $user['password'];
        $type = $user['type'];
        $active = $user['active'];

        $sql = "insert into Users (userName, phone, active, password, type) values ('{$userName}', '{$phone}', '{$active}', '{$password}', '{$type}')";

        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getUsers(){
        $con = getConnection();
        $sql = "select * from Users";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        
        return $result;
    }
    function getUser($userName){
        $con = getConnection();
        $sql = "select * from Users where userName = '{$userName}'";
        $result = mysqli_query($con, $sql);

        if(!$result){
            return false;
        }

        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    


    function blockUser($userName){
        $con = getConnection();
        $sql = "update Users set active = 'False' where userName = '{$userName}' and type != 'Admin'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        
        return $result;
    }
    


    

?>