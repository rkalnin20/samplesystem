<?php 

    include 'fetch.php';
 
    $user_id = $_GET['id'];

    //echo $dep_id;
    $user_info = mysqli_query($con, "select * from table_inventory where id = $user_id");

    $info = mysqli_fetch_array($user_info);



 ?>