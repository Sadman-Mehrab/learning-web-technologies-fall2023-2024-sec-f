<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>
    <form method="post" action="email.php" enctype="" >
        <fieldset>
            <legend><b>Email</b></legend>
            <input type="email" name="email" value="<?php if (isset($_REQUEST['email'])) echo $_REQUEST['email']; ?>" /> <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $email = '';
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }

        if( $email != '') {
            echo 'Email is: '.$email;
        }
        else {
            echo 'Please Enter Your Email';
        }

        
    ?>
</body>

</html>

