<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>

<body>
    <form method="post" action="gender.php" enctype="" >
        <fieldset>
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender" value="<?php if (isset($_REQUEST['gender'])) echo $_REQUEST['gender']; else echo 'Male'; ?>" /> Male 
            <input type="radio" name="gender" value="<?php if (isset($_REQUEST['gender'])) echo $_REQUEST['gender']; else echo 'Female'; ?>" /> Female 
            <input type="radio" name="gender" value="<?php if (isset($_REQUEST['gender'])) echo $_REQUEST['gender']; else echo 'Other'; ?>" /> Other 
            <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $gender = '';
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
        }

        if( $gender != '') {
            echo 'Gender is: '.$gender;
        }
        else {
            echo 'Please Enter Your Gender';
        }

        
    ?>
</body>

</html>

