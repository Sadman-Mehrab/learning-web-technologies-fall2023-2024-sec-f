<?php
    session_start();
    require_once('../models/productModel.php');
 
    $products = getApprovedProducts();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
     
    <center>
            <h2>Available Products</h2>
        <table border=1>
            <tr>
                <td><b>Name</b></td>
                <td><b>Description</b></td>
                <!-- <td><b>ID</b></td> -->
                <td><b>Price</b></td>
                
            </tr>
            
        <?php while($product = mysqli_fetch_assoc($products)){ ?>
            <tr>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['description'] ?></td>
                <!-- <td><?php echo $product['id'] ?></td> -->
                <td><?php echo $product['price'] ?></td>
            </tr>
            <?php   }?>

        </table>
            


            

</center>



</body>
</html>