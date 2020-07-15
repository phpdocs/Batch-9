<?php require_once("theme/header.php"); ?>
<?php require_once("include/functions.php"); ?>

<div class="row justify-content-center mt-5">
    <div class="col-3">
        <h1>User Management</h1>
    </div>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-4 text-center">
        <?php
            if(isset($_POST['btnSubmit'])){
                //Fetch form Values
                $username=check_input($_POST['txtUserName']);
                $password=check_input($_POST['txtPassword']);
                $repassword=check_input($_POST['txtRePassword']);

                $ErrorMessage="<p class='btn-danger'>";
                $validation=true;
                //Validation
                if(empty($username)){
                    $ErrorMessage.="Please Enter Proper UserName<br />";
                    $validation=false;
                }

                if(empty($password) || empty($repassword)){
                    $ErrorMessage.="Please Enter the Password in Both Fields<br />";
                    $validation=false;
                }

                if($password!=$repassword){
                    $ErrorMessage.="Please Enter Same Password in Both Fields<br />";
                    $validation=false;
                }
                $ErrorMessage.="</p>";
                if($validation==true){
                    //Proceed to Build Query for MySQL
                    $InsertUserQuery="INSERT INTO user (user_name,user_password) VALUES ('".$username."','".md5($password)."')";

                    //Include DB Connecton Helper Class
                    require_once("include/conn.php");

                    $result=mysqli_query($conn,$InsertUserQuery);
                    
                    if($result===true){
                        echo "<p class='btn btn-success'>User Has been Inserted Scuessfully.</p>";
                    }else{
                        echo "<p class='btn btn-danger'>".mysqli_error($conn)."</p>";
                    }

                    mysqli_close($conn);

                }else{
                    echo $ErrorMessage;
                }
            }
        ?>
        <br />
        <a href="index.php">Go Back</a>
    </div>
</div>

<?php require_once("theme/footer.php"); ?>