<?php
include("connection.php");
session_start();
if(isset($_POST["login"]))
{
  $username=$_POST['username'];
  $password_1=$_POST['password_1'];
  $x=mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password_1='$password_1'");
  if(mysqli_num_rows($x))
  {
    $row = mysqli_fetch_array($x, MYSQLI_ASSOC);
    $_SESSION['fullname']=$row['fullname'];
    $_SESSION['username']=$username;
    $_SESSION['password']=$password_1;
    header("location:bs.php");
    // echo "Logged in successfully";  
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>MecBooksCart|Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
        display:flex;
        flex-direction: column;
        min-height:100vh;
      }
      .form-container {
              display:table;
              max-width:900px;
              height: 100%;
              width:90%;
              margin:0 auto;
              box-shadow:100px 100px 100px 100px rgba(0,0,0,0.1);
          }
      form {
          display:table-cell;
          width:400px;
          background-color:#ffffff;
          padding:40px 60px 60px;
          color:#505e6c;
      }
      @media (max-width:991px) {
          form {
              padding:40px;
          }
      }
      form h2 {
          font-size:30px;
          line-height:1.5;
          margin-bottom:30px;
      }
      form .form-control {
          background:#f7f9fc;
          border:none;
          border-bottom:1px solid #dfe7f1;
          border-radius:0;
          box-shadow:none;
          outline:none;
          color:inherit;
          text-indent:6px;
          height:40px;
      }
      form .form-check {
          font-size:13px;
          line-height:20px;
      }
      form .btn-primary {
          background:#f4476b;
          border:none;
          border-radius:4px;
          padding:11px;
          box-shadow:none;
          margin-top:35px;
          text-shadow:none;
          outline:none !important;
      }

      form .btn-primary:hover,  form .btn-primary:active, .btn-primary:active:hover {
          background:#eb3b60;
      }
      
      form .already {
          display:block;
          text-align:center;
          font-size:18px;
          color:#6f7a85;
          opacity:0.9;
          text-decoration:none;
      }
      form .input-group-addon{
          background:black;
          color: white;
      }
    </style>
  </head>

  <body>
<?php
      include 'navbar.php';
?>
    <div class="form-container">
      <form name="login"  method="post" >  
        <h2 class="text-center">Login</h2>  
        <div class="form-group">
          <b>Registration Number:</b><br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Registration Number" name="username" required>   
          </div>
        </div>
        <div class="form-group">
          <b>Password:</b><br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" placeholder="Enter a Password" id="password_1" name="password_1" required >
          </div>
        </div>        
<?php
if(isset($_POST["login"]))
{
  $username=$_POST['username'];
  $password_1=$_POST['password_1'];
  $x=mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password_1='$password_1'");
  if(mysqli_num_rows($x)===0)
  {
    ?>
    <div class="alert alert-danger">Incorrect Username or Password! </div>
    <?php
  }
}
?>
        <div class="form-group">
          <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
        </div>
        <div class="already">Not yet a member? <a href="signup.php" >Sign Up</a> </div>
      </form>
    </div>
<?php
      include 'footer.php';
?>
  </body>

</html>
