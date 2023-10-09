<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>

<body>
    <form method="post" action="degree.php" enctype="">
        <fieldset>
            <legend><b>Degree</b></legend>
            <input type="checkbox" name="degree" value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'SSC'; ?>" /> SSC
            <input type="checkbox" name="degree" value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'HSC'; ?>" /> HSC
            <input type="checkbox" name="degree" value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'BSc'; ?>" /> BSc
            <input type="checkbox" name="degree" value="<?php if (isset($_REQUEST['degree'])) echo $_REQUEST['degree']; else echo 'MSc'; ?>" /> MSc
            <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $degree = '';
        if(isset($_REQUEST['degree'])){
            $degree = $_REQUEST['degree'];
        }

        if( $degree != '') {
            echo 'Degree is: '.$degree;
        }
        else {
            echo 'Please Enter Your Degree';
        }

        
    ?>
</body>

</html>

