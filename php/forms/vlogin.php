<?php
    if(isset($_POST['btnLogin'])){ //Verify Form Submission
        $UserName=$_POST['txtUserName'];
        $Password=$_POST['txtPassword'];
        
        echo $UserName;
        //Convert the Password into MD5 Format for Further Use
        $Password=md5($Password);

        //Select UserID From Table Where Username=$UserName and password=$Password

        $db_UserName="afzal";
        $db_Password=md5("temp123");

        //Verifiy the Login
        if($UserName==$db_UserName && $Password==$db_Password){
            echo "<h1>Welcome to Portal</h1>";
        }else{
            echo "<h1>Kindly Enter Correct Login Details</h1>";
        }
    }
?>