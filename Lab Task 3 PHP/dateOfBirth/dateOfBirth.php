<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>

<body>
    <form method="post" action="dateOfBirth.php" enctype="" >
        <fieldset>
        <legend><b>Date of Birth</b></legend>
            <table>
                <tr>
                    <td>dd</td>
                    <td>mm</td>
                    <td>yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day" value="<?php if (isset($_REQUEST['day'])) echo $_REQUEST['day']; ?>" /> /     
                    </td>
                    <td>
                        <input type="text" name="month" value="<?php if (isset($_REQUEST['month'])) echo $_REQUEST['month']; ?>" /> /

                    </td>
                    <td>
                        <input type="text" name="year" value="<?php if (isset($_REQUEST['year'])) echo $_REQUEST['year']; ?>" />
                    </td>
                </tr>
            </table>
             <hr>
            <input type="submit" name="submit" value="Submit" />

        </fieldset>
    </form>

    <?php
        $date = '';
        if(isset($_REQUEST['day']) &&  isset($_REQUEST['month']) && isset($_REQUEST['year'])){
            $day = $_REQUEST['day'];
            $month = $_REQUEST['month'];
            $year = $_REQUEST['year'];
            $date = $day.'/'.$month.'/'.$year;
        }

        if( $date != '') {
            echo 'Date is: '.$date;
        }
        else {
            echo 'Please Enter Date';
        }


        
    ?>
</body>

</html>

