<?php

    require_once('db.php');


    function login($email, $password){
        $con = getConnection();
        $sql = "select * from Persons where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);
        
        if($person){
            return true;
        }else{
            return false;
        }
    }

    function checkEmail($email){
        $con = getConnection();
        $sql = "select * from Persons where email='{$email}'";
        $result = mysqli_query($con, $sql);
        $person = mysqli_fetch_assoc($result);
        
        if($person){
            return true;
        }else{
            return false;
        }
    }

    function getPerson($email){
        $con = getConnection();
        $sql = "select * from Persons where email='{$email}'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        $person = mysqli_fetch_assoc($result);
        return $person;
    }

    function registerPerson($person){
        $con = getConnection();

        $name = $person['name'];
        $phone = $person['phone'];
        $email = $person['email'];
        $password = $person['password'];

        $sql = "insert into Persons (name, phone, email, password) values ('{$name}', '{$phone}', '{$email}', '{$password}')";

        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

?>

