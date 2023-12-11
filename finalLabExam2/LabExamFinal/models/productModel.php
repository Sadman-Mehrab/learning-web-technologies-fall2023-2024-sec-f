<?php
    require_once('db.php');


    function addProduct($product){
        $con = getConnection();

        $name = $product['name'];
        $description = $product['description'];
        $price = $product['price'];
        $approved = $product['approved'];
        $id = $product['id'];

        $sql = "insert into Products (name, description, price, approved, id) values ('{$name}', '{$description}', {$price}, '{$approved}', '{$id}')";

        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function approveProduct($id){
        $con = getConnection();
        $sql = "update Products set approved = 'True' where id = '{$id}'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        
        return $result;
    }

    function getApprovedProducts(){
        $con = getConnection();
        $sql = "select * from Products where approved = 'True'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        return $result;

    }
    function getUnapprovedProducts(){
        $con = getConnection();
        $sql = "select * from Products where approved = 'False'";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            return NULL;
        }

        return $result;

    }



?>