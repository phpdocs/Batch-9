<?php require_once("theme/header.php"); ?>
    <div class="row justify-content-center mt-5">
        <div class="col-3">
            <h1>User Management</h1>
        </div>
    </div>

    <form action="add_user.php" method="post">
    
        <div class="row justify-content-center mt-5">
            <div class="col-2 border-bottom pb-3">
                UserName
            </div>
            <div class="col-2 border-bottom pb-3">
                <input type="text" name="txtUserName" class="form-control" placeholder="Please Enter UserName" required />
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-2 border-bottom pb-3">
                Password
            </div>
            <div class="col-2 border-bottom pb-3">
                <input type="password" name="txtPassword" class="form-control" placeholder="Please Enter Password" required />
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-2 border-bottom pb-3">
                Re-Type Password
            </div>
            <div class="col-2 border-bottom pb-3">
                <input type="password" name="txtRePassword" class="form-control" placeholder="Please Enter Password" required />
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-2 border-bottom pb-2 text-right">
                <input type="reset" value="Clear" class="btn btn-danger" />
            </div>
            <div class="col-2 border-bottom pb-2">
                <input type="submit" value="Save" name="btnSubmit" class="btn btn-primary" />
            </div>
        </div>
    </form>

    <div class="row justify-content-center mt-3">
        <div class="col-6">
            <table class="table">
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    //Reterive the User Data FROM DB
                    require_once("include/conn.php"); 
                    $SelectUserQuery="SELECT user_id,user_name FROM user order by user_id asc";

                    $result=mysqli_query($conn,$SelectUserQuery);

                    if(mysqli_num_rows($result)>0){

                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><a href="update.php?userid=<?php echo $row['user_id']; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="delete.php?userid=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                        }

                    }else{
                        echo "Error:".mysqli_error($conn);
                    }
                    //Close the Connection
                    mysqli_close($conn);
                    
                ?>
            </table>
        </div>
    </div>
<?php require_once("theme/footer.php"); ?>
      