<?php require_once("theme/header.php"); ?>
<?php require_once("include/functions.php"); ?>

    <div class="row justify-content-center mt-5">
        <div class="col-2">
            <h1>Delete User</h1>
        </div>
    </div>
<div class="row justify-content-center mt-3">
    <div class="col-3 text-center">
    <?php
        if(isset($_GET['userid'])){
            $UserID=check_input($_GET['userid']);
            if($UserID>0 || !empty($userid)){

                require_once("include/conn.php");

                //Query to select specific User
                $DeleteUser="DELETE FROM user where user_id=".$UserID;

                //Fetch The data from DB
                $result=mysqli_query($conn,$DeleteUser);
                mysqli_close($conn);

                if($result===true){
                    echo "<p class='btn btn-success'>User has been Deleted Sucessfully</p>";
                }else{
                    echo "<p class='btn btn-danger'>unable to delete user. kindly get back later</p>";
                }

            }
        }?>
            <br />
            <a href="index.php">Go Back</a>
            </div>
        </div>
        <?php
            require_once("theme/footer.php");
        ?>