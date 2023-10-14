<?php
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $isUserNameValid = true;
    $isPasswordValid = true;
    
    // validation for userName
    if(strlen($userName) < 2){
        $isUserNameValid = false;
        echo 'User Name Must Be Atleast 2 Characters <br>';
    }
    
    for($i = 0; $i < strlen($userName) ; $i++){
        if( !(ord($userName[$i]) >= 65 && ord($userName[$i]) <= 90) && !(ord($userName[$i]) >= 97 && ord($userName[$i]) <= 122) && $userName[$i] != '.' && $userName[$i] != '-' && $userName[$i] != '_' ){
            $isUserNameValid = false;
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


    if($isUserNameValid && $isPasswordValid) {
        echo 'Valid User';
    }
    else{
        echo 'Invalid User';

    }

?>