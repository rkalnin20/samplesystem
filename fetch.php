<?php

    include 'config.php';

    $department = mysqli_query($con, "select * from table_department");

    $user_count = mysqli_query($con, "SELECT table_department.id as 'DepID', table_department.department_name as 'Department',count(*) as 'UserNo'
                                    FROM table_inventory
                                    LEFT JOIN table_department
                                    ON table_inventory.department_id = table_department.id
                                    GROUP by department_id;");

?>