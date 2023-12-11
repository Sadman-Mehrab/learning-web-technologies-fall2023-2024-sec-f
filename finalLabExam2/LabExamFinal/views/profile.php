<?php
    session_start();
    require_once('../models/userModel.php');
    
    $userName = $_SESSION['currentUserName'];    
    $user = getUser($userName);
    
    




    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
     
    <center>
            <h2><?php echo $user['userName'] ?>'s Profile</h2>
        <table >
            <tr>
                <td><b>Username:</b></td>
                <td><?php echo $user['userName'] ?></td>             
            </tr>
    
            <tr>
                <td><b>Phone:</b></td>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <td><b>Type:</b></td>
                <td>:<?php echo $user['type'] ?></td>
            </tr>
            <tr>
                <td><b>Active:</b></td>
                <td>:<?php echo $user['active'] ?></td>
            </tr>

        </table>
            


            

</center>



</body>
</html>