<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>

<body>
    <form method="post" action="name.php" enctype="" >
        <fieldset>
            <legend><b>Name</b></legend>
            <input type="text" name="name" value="<?php if (isset($_REQUEST['name'])) echo $_REQUEST['name']; ?>" /> <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $name = '';
        if(isset($_REQUEST['name'])){
            $name = $_REQUEST['name'];
        }

        if( $name != '') {
            echo 'Name is: '.$name;
        }
        else {
            echo 'Please Enter Your Name';
        }

        
    ?>
</body>

</html>

