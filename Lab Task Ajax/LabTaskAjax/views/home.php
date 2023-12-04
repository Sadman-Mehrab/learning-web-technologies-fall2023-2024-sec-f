<?php
    session_start();
    require_once('../models/personModel.php');
    $email = $_SESSION['currentEmail'];
    $person = getPerson($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
</head>
<body>
    <center>
        <h2>Person: <?php echo $person['name'] ?> Information</h2>
        <table border=1>
            <tr>
                <td> <b>Name</b> </td>
                <td><?php echo $person['name'] ?></td>
            </tr>
                <td> <b>Phone</b> </td>
                <td><?php echo $person['phone'] ?></td>
            <tr>
                <td> <b>Email</b> </td>
                <td><?php echo $person['email'] ?></td>
            </tr>
        </table>

    </center>
</body>
</html>
