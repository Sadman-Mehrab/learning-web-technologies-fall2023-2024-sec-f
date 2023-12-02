<?php

    require_once('db.php');



    function login($userName, $password){
        $con = getConnection();
        $sql = "select * from Users where userName='{$userName}' and password='{$password}' and type='Admin'";
        $result = mysqli_query($con, $sql);
        if($result){
            $user = mysqli_fetch_assoc($result);
            if(count($user) > 0){
                return true;
            }else{
                return false;
            }
        }
    }

    function registerEmployee($employee){
        $con = getConnection();

        $employeeName = $employee['employeeName'];
        $contactNo = $employee['contactNo'];
        $userName = $employee['userName'];
        $password = $employee['password'];
        $type = $employee['type'];

        $sql = "insert into Users (employeeName, contactNo, userName, password, type) values ('{$employeeName}', '{$contactNo}', '{$userName}', '{$password}', '{$type}')";

        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getEmployee($userName){
        $con = getConnection();
        $sql = "select * from Users where userName='{$userName}'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    

    function deleteEmployee($userName){
        $con = getConnection();
        $sql = "delete from Users where userName = '{$userName}'";
        $result = mysqli_query($con, $sql);
        
        if(!$result){
            return false;
        }else{
            return true;
        }

    }

    function updateEmployee($currentUserName, $employee){
        $con = getConnection();

        
        $employeeName = $employee['employeeName'];
        $contactNo = $employee['contactNo'];
        $userName = $employee['userName'];
        $password = $employee['password'];
        $type = $employee['type'];
        
        $sql = "update Users set employeeName = {$employeeName}, contactNo = '{$contactNo}', userName = '{$userName}', password = '{$password}', type = '{$type}' where userName = '{$currentUserName}'";

        $result = mysqli_query($con, $sql);
        if(!$result){
            return false;
        }else{
            return true;
        }
    }


    


    

?>