<?php 
    require_once('../models/employerModel.php');
    $employerName = $_REQUEST['employerName'];

    $employer = getEmployer($employerName);
    if(!$employer){
        echo "Invalid Employer Name!";
    }
    else{
        echo $employer['employerName'].", ";
        echo $employer['companyName'].", ";
        echo $employer['contactNumber'].", ";
        echo $employer['userName'].", ";
        echo $employer['password'];
    }

        
    ?>