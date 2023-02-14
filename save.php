<?php 
    include 'config.php';

    $user_name =        $_POST['user_name'];
    $device =           $_POST['device'];
    $date =             $_POST['date'];
    $department_id =    $_POST['department_id'];

    $save = "insert into table_inventory(user_name, device, date, department_id) 
             values ('$user_name', '$device', '$date', '$department_id')";

    if(mysqli_query($con, $save)){

        echo '<script>
                alert("Success, Saved Successfully!");
                window.location.href = "index.php";
             </script>';

        //echo 'Saved Successfully';
    }else{
        echo 'Saving Error: ' .mysqli_error($con);
    }
?>

