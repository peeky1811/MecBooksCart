<?php
  include('connection.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecBooksCart|Contact Us</title>
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

        form .btn-info {
            /* background:#f4476b; */
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
    <!-- Navbar -->
    <?php
        include 'navbar.php';
    ?>
    <div class="form-container">
        <form name="contactForm"  method="post" >  
            <h2 class="text-center"><i class="glyphicon glyphicon-send"></i> CONTACT US</h2>  
            <div class="form-group">
                <b>Name :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" required>   
                </div>
            </div>
            <div class="form-group">
                <b>Email :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Enter your email"  name="email" required >
                </div>
            </div>
            <div class="form-group">
                <b>Mobile Number :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="tel" class="form-control" placeholder="Enter your mobile number"  name="phone" >
                </div>
            </div>
            <div class="form-group">
                <b>Message :</b><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                    <textarea class="form-control" placeholder="Enter your message/query" name="message" rows="6" cols="25"></textarea>
                </div>
            </div>
            <div class="form-group">
                    <button class="btn btn-info btn-block" name="signup" type="submit">Send</button>
            </div>
        </form>
    </div>

    <?php
        
        if(isset($_POST['signup'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];
            $formcontent=" From: $name \n Phone \n Message: $message";
            $subject="CONTACT FORM";
            $mailheader="From: $email \r\n";
            $recipient="gopikamurali.mec@gmail.com";
            $recipient2="arundhathi.mec@gmail.com";
            // mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    ?>
    <script>
        alert("Query submitted!");
    </script>
    <?php
        }
    ?>

    <!--Footer-->
    <?php
    include 'footer.php';
    ?>
</body>
</html>