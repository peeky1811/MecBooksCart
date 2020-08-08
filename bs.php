<?php
  include('connection.php');
  session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecBooksCart|Buy or Sell</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            display:flex;
            flex-direction: column;
            min-height:100vh;
        }

        
        h3{
            color:black;
        }
        
        .jumbotron{
            background:#3c763da1;
            color:floralwhite;
        }

        .container .btn-default{
            background: darkslategrey;
            color:floralwhite;
        }
        .container .btn-default:hover,  form .btn-default:active, .btn-default:active:hover {
            background:black;
            color:floralwhite;
      }
    </style>    

</head>
<body>
    <!-- Navbar -->
    <?php
        include 'navbar.php';
        $first_name = explode(' ',trim($_SESSION['fullname']))[0];
    ?>
    <h1 style="padding-left:2%;"><b> Hey <?php echo $first_name; ?>!</b></h1>
    <div class=container>
    <div class="jumbotron" >
       
            <h1>Want to buy books for college?</h1>
            <h3>Too expensive? Get them at a Cheap rates from Seniors in your College.<br></h3>
            <h3>What are you waiting for?</h3>
            <br/>
            <a href="buy.php" class="btn btn-default btn-lg active">Buy Now</a>
        
    </div>
    <div class="jumbotron" >
       
            <h1>Have old text books stacked up in your shelves?</h1>
            <h3>Then put them to Good use and Make some Money.<br></h3>
            <h3>What are you waiting for?</h3>
            <br/>
            <a href="sell.php" class="btn btn-default btn-lg active">Sell Now</a>
    </div>   
    </div>
    <!--Footer-->
    <?php
    include 'footer.php';
    ?>
</body>
</html>