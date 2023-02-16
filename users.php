<?php 
    include 'detail.php';
 ?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="styles-users.css" /> 
        </head>
        <body>
            <br>
            <div class="content">

                <a class="action-back" href="http://localhost/test/index.php">Back</a>
                
                <h2 align="center">Users</h2>
                <table border ="1" cellspacing="0" cellpadding="10" width="100%">
                    <tr>
                         <th>Action</th> 
                        <th>User Name</th>
                        <th>Device</th>
                        <th>Date</th>
                        <th>Department</th>
                    <tr>

                    <?php

                        if (mysqli_num_rows($users) > 0) {
                            while($table_list = mysqli_fetch_array($users))
                                {
                            ?>
                            <tr>
                                <td align="center">         
                                    <a class="action-edit" href="http://localhost/test/edit-form.php?id=<?php echo $table_list['UserID']; ?>">Edit</a>
                                    <a class="action-delete" href="http://localhost/test/delete.php?id=<?php echo $table_list['UserID']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                                </td>
                                <td ><?php echo $table_list['user_name']; ?></td>
                                <td ><?php echo $table_list['device']; ?></td>
                                <td ><?php echo $table_list['date']; ?></td>
                                <td ><?php echo $table_list['department_name']; ?></td>
                            </tr>
                            <?php
                                }
                        }else{

                            ?>
                                <tr>
                                    <td colspan="5" align="center">No data found</td>
                                </tr>
                    <?php         
                        }
                    ?>  
                </table>
            </div>
        </body>
    </html>