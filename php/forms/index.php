<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Form</title>
</head>
<body>
    <h1>GET HTML Form</h1>
    <form method="get" action="getmethod.php">
        <input type="text" name="txtName" placeholder="Please Enter Your Name" />
        <br />
        <input type="reset" value="Clear" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <h1>Post HTML Form</h1>
    <form method="post" action="postmethod.php">
        <input type="text" name="txtName" placeholder="Please Enter Your Name" />
        <br />
        <input type="reset" value="Clear" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
</body>
</html>