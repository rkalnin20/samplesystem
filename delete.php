<?php 
    include 'config.php';

    $user_id = $_GET['id'];

    $user_info = mysqli_query($con, "select * from table_inventory where id = $user_id");

    $info = mysqli_fetch_array($user_info);


    $delete = "delete from table_inventory where id='$user_id'";

    if(mysqli_query($con, $delete)){

        echo '<script>
                alert("Success, Deleted Successfully!");
                window.location.href = "users.php?id='.$info['department_id'].'";
             </script>';

        //echo 'Saved Successfully';
    }else{
        echo 'Saving Error: ' .mysqli_error($con);
    }
?>

