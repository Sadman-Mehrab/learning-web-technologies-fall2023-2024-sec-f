<?php
    require_once('../models/productModel.php');

    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    $approved = "False";
    $id = uniqid();

    $product = ['name' => $name, 'description' => $description, 'price' => $price, 'approved' => $approved, 'id' => $id];
    $status = addProduct($product);
    if($status){
        echo "Success";
        header("location: ../views/sellerHome.html");
    }else{
        echo "Failure";
    }

    
?>