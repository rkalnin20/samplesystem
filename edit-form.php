
<?php include 'edit-fetch.php';?>

<html>
        <head>
            <link rel="stylesheet" type="text/css" href="styles.css" /> 
        </head>
        <body>
            <div class="content">
                <h2>Edit Form</h2>
                <form method="POST" action="edit.php?id=<?php echo $user_id; ?>">
                        <label>User Name:</label>
                        <input value="<?php echo $info['user_name']; ?>" type="text" id="user_name" name="user_name" required> <br><br>
                  
                        <label>Device:</label>
                        <input value="<?php echo $info['device']; ?>" type="text" id="device" name="device" required> <br><br>

                        <label>Date:</label>
                        <input value="<?php echo $info['date']; ?>" type="date" id="date" name="date" required> <br><br>

                        <label>Department:</label>
                        <select  name="department_id" id="department_id" required>
                            <option value="">Choose Department</option> 
                            <?php
                                while($list = mysqli_fetch_array($department))
                                {
                                    if($list['id'] ==  $info['department_id']){  
                            ?>
                                <option selected value="<?php echo $list['id']; ?>"><?php echo $list['department_name']; ?></option> 
                            <?php
                                 }else{
                            ?>
                                <option  value="<?php echo $list['id']; ?>"><?php echo $list['department_name']; ?></option> 

                            <?php
                                 }

                                }
                            ?>                             
                        </select>
                        <br><br>
                        
                        <button type="submit" id="submit">Submit</button>
                </form>
            </div>
        </body>
    </html>