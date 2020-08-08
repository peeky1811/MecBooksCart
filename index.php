<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecBooksCart|Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #banner-image{
            background: url(undraw_book_lover.svg) no-repeat center;
            background-size: contain;
            text-align: center;
            color: #f8f8f8;
        }
        #banner-content{
            color: #f8f8f8;
            position: relative;
            padding-top: 6%;
            padding-bottom: 6%;
            margin-top: 12%;
            margin-bottom: 12%;
            background-color: rgba(0, 0, 0, 0.7);
        }
        @media(max-width:768px) {
            #banner_content {
                padding-bottom: 15%;
            }
            footer{
                text-align:left;
            }
        }
    </style>

</head>
<body>
    <!-- Header -->
    <?php
        include 'navbar.php';
    ?>
    <div id="banner-image">
        <div class="container">
            <div id="banner-content">
                <h1>Get your college books at a cheaper price and sell your old ones here.</h1>
                <h4>What are you waiting for?</h4>
                <a href="login.php" class="btn btn-danger btn-lg active">Register Now</a>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php
    include 'footer.php';
    ?>
</body>
</html>