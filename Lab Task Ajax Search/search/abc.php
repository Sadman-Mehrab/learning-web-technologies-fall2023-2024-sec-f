<?php 
    //sleep(3);
    $term = $_POST['term'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where username like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $users = [];

    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }

    echo json_encode($users);

?>