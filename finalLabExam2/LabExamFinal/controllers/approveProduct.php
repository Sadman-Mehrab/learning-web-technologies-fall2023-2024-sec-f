<?php
    require_once('../models/productModel.php');

    $id = $_REQUEST['id'];

    $status = approveProduct($id);
    if($status){
        echo "Success";
        header("location: ../views/productsForApproval.php");
    }else{
        echo "Failure";
    }

    
?>