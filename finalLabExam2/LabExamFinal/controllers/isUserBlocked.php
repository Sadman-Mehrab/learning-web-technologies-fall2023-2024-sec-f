<?php
    require_once('../models/userModel.php');

    $userName = $_SESSION['currentUserName'];

    $user = getUser($userName);
    if($user['active'] == 'False'){
        echo "True";
    }else{
        echo "False";
    }

    
?>