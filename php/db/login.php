<?php 
    require_once("include/functions.php");

    $ErrMessage="";
    //Verify Login
    if(isset($_POST['btnLogin'])){
        $username=check_input($_POST['txtUserName']);
        $password=check_input($_POST['txtPassword']);

        if(!empty($username) && !empty($password)){
            require_once("include/conn.php");
            $AuthUserQuery="SELECT user_id from user WHERE user_name='".$username."' AND user_password='".md5($password)."'";
            $result=mysqli_query($conn,$AuthUserQuery);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                mysqli_close($conn);
    
                if($row['user_id']>0){
                    session_start();
                    $_SESSION['user_id']=$row['user_id'];
                    $_SESSION['Auth']=true;
                    header("Location:index.php");
                }else{
                    $ErrMessage="<p class='btn btn-danger'>Please Enter Username/Password</p>";
                }
            }else{
                $ErrMessage="<p class='btn btn-danger'>Please Enter Username/Password</p>";
            }
        }else{
            $ErrMessage="<p class='btn btn-danger'>Please Enter Username/Password</p>";
        }
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">PHP MySQL</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                  </li>

              </ul>
          </div>
      </nav>

      <div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <div class="col-4">
            <?php echo $ErrMessage; ?>
        </div>
    </div>
        <form method="post" action="">
            <div class="row justify-content-center mt-2">
                <div class="col-1">
                    UserName
                </div>
                <div class="col-2">
                    <input type="text" name="txtUserName" class="form-control" required />
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-1">
                    Password
                </div>
                <div class="col-2">
                    <input type="password" name="txtPassword" class="form-control" required />
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-1">
                    <input type="reset" value="Clear" class="btn btn-danger" />
                </div>
                <div class="col-1 ">
                <input type="submit" name="btnLogin" value="Login" class="btn btn-success" />
                </div>
            </div>
        </form>
<?php require_once("theme/footer.php"); ?>