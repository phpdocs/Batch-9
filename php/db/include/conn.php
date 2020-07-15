<?php
    //Connect to MySQL Server
    define("SERVER","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DB","batch9");

    $conn=mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
    if(!$conn){
        die("Error:".mysqli_connect_error());
    }
?>