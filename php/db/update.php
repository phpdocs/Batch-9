<?php require_once("theme/header.php"); ?>
<?php require_once("include/functions.php"); ?>
    <div class="row justify-content-center mt-5">
        <div class="col-3">
            <h1>Update User</h1>
        </div>
    </div>
    <?php
        if(isset($_GET['userid'])){
            $UserID=check_input($_GET['userid']);
            if($UserID>0 || !empty($userid)){

                require_once("include/conn.php");

                //Query to select specific User
                $SelectUser="SELECT user_name from user where user_id=".$UserID;

                //Fetch The data from DB
                $result=mysqli_query($conn,$SelectUser);

                $row=mysqli_fetch_assoc($result);
                mysqli_close($conn);
    ?>
     <form action="update_user.php" method="post">
        <input type="hidden" name="txtUserID" value="<?php echo $UserID; ?>" />
        <div class="row justify-content-center mt-5">
            <div class="col-2 border-bottom pb-3">
                UserName
            </div>
            <div class="col-2 border-bottom pb-3">
                <input type="text" name="txtUserName" value="<?php echo $row['user_name']; ?>" class="form-control" placeholder="Please Enter UserName" required />
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
        <?php 
            }else{
                echo "Please eneter Proper Userid for Update.";
            }
        } 
        
        ?>

<?php require_once("theme/footer.php"); ?>