<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MecBooksCart|Signup</title>
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
            width:90%;
            margin:0 auto;
            box-shadow:100px 100px 100px 100px rgba(0,0,0,0.1);
        }
        form {
            display:table-cell;
            width:400px;
            background-color:#ffffff;
            padding:40px 60px 100px 60px;
            color:#505e6c;
        }
        @media (max-width:991px) {
            form {
                padding:40px  40px 100px 40px;
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
        form .btn-primary:hover,  form .btn-primary:active, .btn-primary:active:hover  {
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
            <form name="myForm"  method="post" >  
            <h2 class="text-center">Create an account</h2>  
                <div class="form-group">
                    <b>Registration Number:</b><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Registration Number" name="username" required>   
                    </div>
                </div>
<?php
                include("connection.php");
                if(isset($_POST['signup'])!='')
                {
                    $username=$_POST["username"];
                    $sql = mysqli_query($con, "SELECT * from user WHERE username = '$username'");
                    if(mysqli_num_rows($sql) > 0){
                        echo "This number is already registered. Please Login !";
?> 
                            <br><br>  
<?php
                    }
                }    

?>
                <div class="form-group">    
                    <b>Full Name:</b><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="Enter your Name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <b>Password:</b><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Enter a Password" id="password_1" name="password_1" required >
                    </div>
                </div>
                <div class="form-group">
                    <b>Repeat Password:</b><br>  
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>   
                        <input type="password" class="form-control" placeholder="Re-enter Password" id="password_2" name="password_2" required onkeyup='check();' > 
                    </div>
                    <span id='message'></span>

                    <script> 
                    var check = function() {
                    if (document.getElementById('password_1').value == document.getElementById('password_2').value) {
                        document.getElementById('message').style.color = 'green';
                        document.getElementById('message').innerHTML = 'Matching :)';
                    } else {
                        document.getElementById('message').style.color = 'red';
                        document.getElementById('message').innerHTML = 'Not Matching :(';
                    }
                    }
                    </script>
<?php
                    if(isset($_POST['signup'])!=''){
                        if($_POST["password_1"] !== $_POST["password_2"]) {
                            echo "Password Mismatch! Please re-enter your details.";
?> 
                    <br><br>  
<?php 
                        }
                    }
?>
                </div>
                <div class="form-group">
                    <b>Mobile Number:</b><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="tel" class="form-control" placeholder="Enter your Phone Number" name="phone" required>
                    </div>    
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the license terms.</label></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" name="signup" type="submit">Sign Up</button>
                </div>
                <div class="already">You already have an account? <a href="login.php" > Login here.</a> </div>
            </form>  
        </div>

<?php
if(isset($_POST['signup'])!='')
{
$username=test_input($_POST["username"]);
$password_1=$_POST["password_1"];
$password_2=$_POST["password_2"];
$phone=test_input($_POST["phone"]);
$name=test_input($_POST["name"]);


    if($password_1 === $password_2)
    {
        $pwd=$password_1;
        $insert_1=mysqli_query($con, "INSERT INTO user(username,password_1,phone, fullname ) VALUES('$username','$pwd','$phone', '$name')");
        if($insert_1)
        { 
?>
<script type="text/javascript">    
        alert ("Your registration has been successful");
        window.location.replace("login.php");
</script>
<?php
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
            </div>
        </form>
<?php
    include 'footer.php';
?>

    </body>
</html>


