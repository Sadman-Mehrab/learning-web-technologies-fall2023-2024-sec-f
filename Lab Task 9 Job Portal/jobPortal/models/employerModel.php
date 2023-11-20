<?php

    require_once('db.php');

   

    function getEmployer($employerName){
        $con = getConnection();
        $sql = "select * from employer where employerName='{$employerName}'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        $employer = mysqli_fetch_assoc($result);
        return $employer;
    }



    

?>