<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>File Upload</h1>
        <form action="" method="post" enctype="multipart/form-data">
            Image: <input type="file" name="fiImage" />
            <br />
            <input type="submit" name="btnUpload" value="Upload" />
        </form>

        <br />
        <br />
        <?php
            //File Form Processing Area
            if(isset($_POST['btnUpload'])){
                $fileName=$_FILES['fiImage']['name'];
                $fileType=$_FILES['fiImage']['type'];
                $fileSize=$_FILES['fiImage']['size'];


                $fileExt=explode("/",$fileType);
                $fileFinalExt=strtolower($fileExt[1]);
                $maxFileSize=100000;
                
                //File Type/Ext Validation
                if($fileFinalExt=="png" || $fileFinalExt=="jpg" ||
                 $fileFinalExt=="jpeg" || $fileFinalExt=="bmp" || $fileFinalExt=="gif"){

                    //File Size Validation
                    if($fileSize<=$maxFileSize){

                        echo "File Name=".$fileName."<br />";
                        echo "File Type=".$fileExt[1]."<br />";
                        echo "File Size in KB=".$fileSize."<br />";

                        //Move the File to Location
                        if(move_uploaded_file($_FILES['fiImage']['tmp_name'],"users_img/".$fileName)){
                        ?>
                            <img src="users_img/<?php echo $fileName ?>" />
                        <?php
                        }else{
                            echo "Error";
                        }
                    }else{
                        echo "Please Upload File Less then or Equal to 100 KB";
                    }
                }else{
                    echo "Please Upload only Image file like PNG,Jpg/JPEG,BMP,GIF";
                }
                
            }
        ?>
    </center>
</body>
</html>