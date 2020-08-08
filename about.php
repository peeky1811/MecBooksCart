<?php
  include('connection.php');
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MecBooksCart|About Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        body{
                display:flex;
                flex-direction: column;
                min-height:100vh;
            }
        

        #banner-content{
            color: black;
            position: relative;
            background-color: #3c763da1;
        }
        @media(max-width:768px) {
            #banner_content {
                padding-bottom: 15%;
            }
            footer{
                text-align:left;
            }
        }
        .card {
        box-shadow: 0 4px 8px 0 #000000;
        background-color: floralwhite;
        margin:3%;
        padding: 3%;
        text-align: center;
        }

        .jumbotron .h1, .jumbotron h1  {
            color: floralwhite;
        }

        .jumbotron .h2, .jumbotron h2{
            color:blanchedalmond;
        }
        .fa {
        padding: 5px;
        text-decoration: none;
        font-size: 30px;
        }

        button:hover, a:hover {
        opacity: 0.7;
        }
        .title {
        color: #3c763da1;
        font-size: 18px;
        }
        .fa-linkedin:before {
            color: royalblue;
        }
        .fa-github:before {
            color: darkviolet;
        }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php
            include 'navbar.php';
        ?>
        <div id="banner-image">
            <div class="jumbotron container" id= "banner-content">
                <div class="page-header">
                    <h1>What We Do</h1>                
                </div>
                <p>One of the most significant difficulties faced by students at the beginning of a semester is getting the required reference material. We aim to solve this by an online textbook buy/sell platform.</p>
                <p>We’ll connect you with the students on your very own college campus for direct buying and selling!</p>

                <div class="page-header">
                    <h1>How to use this site?</h1>
                </div>

                <p>Create an account if you are a new user or login if you have already registered.</p>
                <br>
                <h2><b>Sell a Book</b></h2>
                <br>
                <p><b>Step 1: </b>Press <a class="btn btn-danger">SELL</a> if you want to sell your old books.</p>
                <p><b>Step 2: </b>You need to have the book in hand as filling details like ISBN number, Book Title, Book Author are required. The Department, Semester/Year and Subject Code of the book is also required.<p> <i class="glyphicon glyphicon-warning-sign"></i> Please note it is not your semester.</p></p>
                <p><b>Step 3: </b>You can view your sold books in the <a class="btn btn-default"> My Sell List </a> through which you will be able to see all the books you are selling. If you have made any mistakes you can modify <a class="btn btn-warning">MODIFY</a> your entry except ISBN no.<p> <i class="glyphicon glyphicon-warning-sign"></i> Please note that ISBN number should be entered carefully as it cannot be changed later.</p></p>
                <p><b>Step 4: </b>You will be contacted through the phone number given at the time of registration so that you can discuss the price with your buyer.</p>
                <p><b>Step 5: </b>The most important step after selling, the book must be manually removed <a class="btn btn-danger" >DELETE</a> through the <a class="btn btn-default" > My Sell List </a>.</p>
                <br>
                <h2><b>Buy a Book</b></h2>
                <br>
                <p><b>Step 1: </b>Press <a class="btn btn-danger">BUY</a> if you want to buy old books.</p>
                <p><b>Step 2: </b>You can search for the book you want by Book Title, Book Author, Department, Semester/Year and Subject Code.</p>
                <p><b>Step 3: </b>The book that you searched for will be displayed with the contact details of the seller with whom you can negotiate further.</p>
                <div class="page-header">
                    <h1>Creators</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="card col-sm-5">
                            <h3><b>Gopika Murali</b></h3>
                            <p><i>Government Model Engineering College, Kochi</i></p>
                            <p class="title"><tt>Full Stack Web Developer</tt></p>
                            <a href="https://www.linkedin.com/in/gopika-murali-135467196/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/peeky1811"><i class="fa fa-github"></i></a>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="clearfix visible-xs"></div>
                        <div class="card col-sm-5">
                            <h3><b>Arundhathi Janardhanan</b></h3>
                            <p><i>Government Model Engineering College, Kochi</i></p>
                            <p class="title"><tt>Full Stack Web Developer</tt></p>
                            <a href="https://www.linkedin.com/in/arundhathi-janardhanan-841465196/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/aathi-j"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
    </body>
</html>