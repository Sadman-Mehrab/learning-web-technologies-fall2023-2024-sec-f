<?php 
    require_once('../models/userModel.php');

    $term = $_POST['term'];
    $result = getEmployees($term);

    $users = [];

    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }

    echo json_encode($users);

?>