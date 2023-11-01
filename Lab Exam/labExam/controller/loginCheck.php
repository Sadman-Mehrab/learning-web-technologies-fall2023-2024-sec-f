<?php
    require_once('../model/userModel.php');

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($id == "" || $password == "" ){
    
        echo "null id or password!";
    
    }
    else{
        $status = login($id, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            $_SESSION['currentUserId'] = $id;
            if($status == 'Admin'){
                header("location: ../view/admin_home.php?id={$id}");
            }
            else if($status == 'User'){
                header("location: ../view/user_home.php?id={$id}");

            }

        }else{
            echo "invalid user!";
        }
    }
?>