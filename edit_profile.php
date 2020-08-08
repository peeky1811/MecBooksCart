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
        <title>MecBooksCart|Edit Profile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
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
        <!-- Header -->
        <?php
            include 'navbar.php';
        
        
        //if user is not logged in
        if(!isset($_SESSION['username'])){
            header('location:login.php');
        }
        $username=$_SESSION['username'];
        $fetch=mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
        if($fetch && $fetch->num_rows>0){
            while($row=mysqli_fetch_array($fetch)){
            ?>
                <div class="form-container">
                    <form id="modifyform"  method="post" >   
                        <div class="form-group">
                            <h2>Username : <?php echo $row["username"];?> </h2>
                            <input type="hidden" name="username" value="<?php echo $row["username"];?>">
                        </div>
                        <div class="form-group">
                            <b>Full Name:</b><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" value="<?php echo $row["fullname"];?>"  name="fullname" required >
                            </div>
                        </div>
                        <div class="form-group">    
                            <b>Phone:</b><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" class="form-control" value="<?php echo $row["phone"];?>"  name="phone" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name="user_modify" type="submit" >Modify Details</button>    
                        </div> 
                    </form>
                </div>
            <?php
            }
        }
        if(isset($_POST['user_modify'])){
            $fullname=test_input($_POST['fullname']);
            $phone=test_input($_POST['phone']);
            $update=mysqli_query($con, "UPDATE user SET fullname='$fullname', phone='$phone' WHERE username='$username' ");
            if($update){
                ?>
                <script>
                    alert("Details modified successfully.");
                    window.location.replace("edit_profile.php");
                </script>
                <?php
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }  
        ?>
        <!-- Footer -->
        <?php
            include 'footer.php';
        ?>
    </body>
</html>