<?php 
    include 'config.php';

    $user_id = $_GET['id'];

    $user_name =        $_POST['user_name'];
    $device =           $_POST['device'];
    $date =             $_POST['date'];
    $department_id =    $_POST['department_id'];
    
    $edit = "update table_inventory set user_name='$user_name', device='$device', date='$date', department_id='$department_id' where id='$user_id'";
    
    if(mysqli_query($con, $edit)){

        echo '  <script>
                    alert("Success, Edited Successfully!");
                    window.location.href = "users.php?id='.$department_id.'";
                </script>';
    
    //echo 'Saved Successfully';
    }else{
        echo 'Editing Error: ' .mysqli_error($con);
    }
    
?>

