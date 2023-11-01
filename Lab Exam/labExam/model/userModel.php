<?php

    require_once('db.php');

    function login($id, $password){
        $con = getConnection();
        $sql = "select * from Users where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return $user['type'];
        }else{
            return NULL;
        }
    }

    function registerUser($user){
        $id = $user['id'];
        $password = $user['password'];
        $name = $user['name'];
        $type = $user['type'];

        $con = getConnection();
        $sql = "insert into Users (id, name, password, type) values ('{$id}', '{$name}', '{$password}', '{$type}')";
        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from Users where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return $user;
        }else{
            return NULL;
        }
    }

    function getAllUsers(){
        $con = getConnection();
        $sql = "select * from Users";
        $result = mysqli_query($con, $sql);
        
        if($result){
            return $result;
        }
        else {
            return NULL;
        }
    }


    function updateUser($user){
        $id = $user['id'];
        $password = $user['password'];
        $name = $user['name'];
        $type = $user['type'];

        $con = getConnection();
        $sql = "update Users set id='{$id}',password='{$password}',  name='{$name}', type='{$type}' where id = '{$id}'";
        $result = mysqli_query($con, $sql);
    }


?>