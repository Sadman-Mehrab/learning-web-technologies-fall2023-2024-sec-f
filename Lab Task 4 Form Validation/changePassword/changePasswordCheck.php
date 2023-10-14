<?php
    $currentPasssword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypePassword = $_REQUEST['retypePassword'];

    $isPasswordChangeValid = true;
    
    if($currentPasssword == '' || $newPassword == '' || $retypePassword == ''){
        echo 'Values Cannot Be Empty <br>';
        $isPasswordChangeValid = false;
    }
    
    if($newPassword == $currentPasssword) {
        echo 'New Password Cannot Be Same As Current Password<br>';
        $isPasswordChangeValid = false;
    }

    if($newPassword != $retypePassword) {
        echo 'Retyped Password Should Be The Same As New Password<br>';
        $isPasswordChangeValid = false;
    }

    if($isPasswordChangeValid) {
        echo 'Password Change Successful';
    }
    else{
        echo 'Password Change Unsuccessful';

    }

?>