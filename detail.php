<?php 
    include 'config.php';

    $dep_id = $_GET['id'];

    //echo $dep_id;
    $users = mysqli_query($con, "select *, table_inventory.id as 'UserID' from table_inventory LEFT JOIN table_department
    ON table_inventory.department_id = table_department.id where department_id = $dep_id order by table_inventory.id desc");

 ?>