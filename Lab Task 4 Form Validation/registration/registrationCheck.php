<?php
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $gender = $_REQUEST['gender'];

    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];


    $isNameValid = true;
    $isUserNameValid = true;
    $isPasswordValid = true;
    $isConfirmPasswordValid = true;
    $isEmailValid = true;
    $isDOBValid = true;



    // validation for userName and Name
    if(strlen($userName) < 2 || strlen($name) < 2 ){
        $isUserNameValid = false;
        $isNameValid = false;
        echo 'Name and User Name Must Be Atleast 2 Characters <br>';
    }
    
    for($i = 0; $i < strlen($userName) ; $i++){
        if( !(ord($userName[$i]) >= 65 && ord($userName[$i]) <= 90) && !(ord($userName[$i]) >= 97 && ord($userName[$i]) <= 122) && $userName[$i] != '.' && $userName[$i] != '-' && $userName[$i] != '_' ){
            $isUserNameValid = false;
            $isNameValid = false;
            echo 'Invalid Character in Username <br>';
            break;
        }
        
    }
    
    
    // validation for password
    if(strlen($password) < 8){
        $isPasswordValid = false;
        echo 'Password Must Be Atleast 8 Characters <br>';
    }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')){
        $isPasswordValid = false;
        echo 'Password Must Contain @, #, $ or % <br>';
    }

    // validation for confirm password
    if($password != $confirmPassword){
        echo 'Passwords Should Match';
        $isConfirmPasswordValid = false;
    }
    
    // validation for email
    if(!str_contains($email, '@') && !str_contains($email, '.') && !str_contains($email, 'com')){
        echo 'Email Must Be Valid';
        $isEmailValid = false;
    }
    
    // validation for DOB
    if(!($day >= 1 && $day <= 31) && !($month >= 1 && $month <= 12) && !($year <= 2023-18)){
        echo 'Date Of Birth Must Be Valid and You Must Be Atleast 18 Years Old';
        $isDOBValid = false;
    }

    if($isNameValid && $isUserNameValid && $isPasswordValid && $isConfirmPasswordValid && $isEmailValid && $isDOBValid){
        echo 'Registration Successful';
    }
    else{
        echo 'Registration Unsuccessful';
    }
?>