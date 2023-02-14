<?php include 'fetch.php';?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="styles.css" /> 
        </head>
        <body>
            <div class="content">
                <h2>Simple Inventory Form</h2>
                <form method="POST" action="save.php">
                        <label>User Name:</label>
                        <input type="text" id="user_name" name="user_name" required> <br><br>
                  
                        <label>Device:</label>
                        <input type="text" id="device" name="device" required> <br><br>

                        <label>Date:</label>
                        <input type="date" id="date" name="date" required> <br><br>

                        <label>Department:</label>
                        <select name="department_id" id="department_id" required>
                            <option value="">Choose Department</option> 
                            <?php
                                while($list = mysqli_fetch_array($department))
                                {
                            ?>
                                <option value="<?php echo $list['id']; ?>"><?php echo $list['department_name']; ?></option> 
                            <?php
                                }
                            ?>                             
                        </select>
                        <br><br>
                        
                        <button type="submit" id="submit">Submit</button>
                </form>

                <br><br>

                <table border ="1" cellspacing="0" cellpadding="10" width="100%">
                    <tr>
                        <th>Department</th>
                        <th>Number of Users</th>
                    <tr>
                    
                    <?php

                        if (mysqli_num_rows($user_count) > 0) {
                            while($table_list = mysqli_fetch_array($user_count))
                                {
                            ?>
                            <tr>
                                <td><a href="http://localhost/test/users.php?id=<?php echo $table_list['DepID']; ?>">
                                        <?php echo $table_list['Department']; ?>
                                    </a>
                                </td>
                                <td align="center"><?php echo $table_list['UserNo']; ?></td>
                            </tr>
                            <?php
                                }
                            }else{

                                ?>
                                    <tr>
                                        <td colspan="2" align="center">No data found</td>
                                    </tr>
                        <?php         
                            }
                    ?>  

                </table>

            </div>
        </body>
    </html>