<?php
include("connection.php");
session_start();       
//if user is not logged in
if(!isset($_SESSION['username'])){
    header('location:login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Exchange Website|Change Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
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


        form .btn-primary:hover,  form .btn-primary:active, .btn-primary:active:hover {
            background:#eb3b60;
        }

    </style>
</head>
<body>
    <!-- Header -->
    <?php
        include 'navbar.php';
    ?>
    <!-- /Header -->
    <div class="form-container">
        <form name="changePasswordForm"  method="post" >  
            <h2 class="text-center">Change Password</h2>  
            <div class="form-group">
                <b>Current Password :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Enter current password" name="currentpassword" required>   
                </div>
            </div>
            <div class="form-group">
                <b>New Password :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="color:#f4476b;"></i></span>
                    <input type="password" class="form-control" placeholder="Enter new password" name="newpassword" id="password_1" required>   
                </div>
            </div>
            <div class="form-group">
                <b>Confirm New Password :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="color:#f4476b;"></i></span>
                    <input type="password" class="form-control" placeholder="Enter new password again" name="confirmpassword" id="password_2" onkeyup=check() required>   
                
            </div>
            </div><span id='message'></span>
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
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="change" type="submit">Change</button>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['change'])){
            $username=$_SESSION['username'];
            $currentpassword=$_POST['currentpassword'];
            $newpassword=$_POST['newpassword'];
            $result=mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
            $row=mysqli_fetch_array($result);
            if($currentpassword==$row['password_1']){
                mysqli_query($con, "UPDATE user SET password_1='$newpassword' WHERE username='$username' ");
                ?>
                <script>
                    alert('Password changed');
                    window.location.replace('settings.php');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('Current Password is incorrect.');
                    
                </script>
                <?php
            }
        }
    ?>
    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- /Footer -->
</body>
