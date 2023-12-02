<?php
    require_once('../models/userModel.php');

    $employeeName = $_REQUEST['employeeName'];
    $contactNo = $_REQUEST['contactNo'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    $employee = ["employeeName" => $employeeName , "contactNo" => $contactNo, "username" => $username, "password" => $password, "type" => "Employee" ];
    registerEmployee($employee);
?>