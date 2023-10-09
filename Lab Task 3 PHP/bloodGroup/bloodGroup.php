<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>

<body>
    <form method="post" action="bloodGroup.php" enctype="">
        <fieldset>
            <legend><b>Blood Group</b></legend>
            <select name="bloodGroup">
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'A+'; ?>" >A+</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'A-'; ?>" >A-</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'B+'; ?>" >B+</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'B-'; ?>" >B-</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'AB+'; ?>" >AB+</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'AB-'; ?>" >AB-</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'O+'; ?>" >O+</option>
                <option value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'O-'; ?>" >O-</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $bloodGroup = '';
        if(isset($_REQUEST['bloodGroup'])){
            $bloodGroup = $_REQUEST['bloodGroup'];
        }

        if( $bloodGroup != '') {
            echo 'Blood Group is: '.$bloodGroup;
        }
        else {
            echo 'Please Enter Your Blood Group';
        }

        
    ?>
</body>

</html>

