<?php
  include('connection.php');
  session_start();
  //if user is not logged in
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecBooksCart|My Sell List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body{
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .column{
        background: floralwhite;
        margin: 3%;
        padding: 5px 10px 5px 10px;
    }

    #modifyform {
            display: table-cell;
            width: 600px;
            background-color: #ffffff;
            padding:20px 60px;
            color:#505e6c;
    }
    .jumbotron{
        background-color:#3c763da1;
    }
    </style>
</head>
<body>
    <!-- Navbar -->
<?php
    include 'navbar.php';
    $first_name = explode(' ',trim($_SESSION['fullname']))[0];
?>
    
    <div class="container">
        <h1><b> <?php echo $first_name; ?>'s Sell List...</b></h1>
        <div class="jumbotron">
            <?php
            $username=$_SESSION['username'];
            $disp=mysqli_query($con, "SELECT * FROM book WHERE username='$username'");
        
            if($disp !== false && $disp->num_rows > 0)
            {
                while ($li=mysqli_fetch_array($disp)) 
                {
            ?>
                    <div class="column">
                        <h2><b><?php echo 'Book Title: '?></b><?php echo $li["title"]?></h2>
                        <h4><b><?php echo 'Author Name: '?></b><?php echo $li["author"]?></h4>
                        <h4><b><?php echo 'Semester: '?></b><?php echo $li["semester"]?></h4>
                        <h4><b><?php echo 'Department: '?></b><?php echo $li["dept"]?></h4>
                        <h4><b><?php echo 'Subject Code: '?></b><?php echo $li["subjectcode"]?></h4>
                        <form method='POST'>
                        <input type="hidden" name="isbn" value="<?php echo $li["isbn"];?>">
                            <button type="submit" class="btn btn-warning"  formaction="modify.php" name="modify" ><span class="glyphicon glyphicon-pencil"></span> Modify</button>
                            <button type="submit" class="btn btn-danger" formaction="delete.php" name="delete" onclick="return confirm('Are you sure you want to delete this item?');" ><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </form>
                    </div>
            <?php            
                } 
            }   
            else
            {
            ?>
            <div class="column">
            <?php
                echo "<h3>Your Sell List is Empty</h3>";
            ?>
            </div>
            <?php
            }      
            ?>    
    </div>   
</div>
<?php   
        include 'footer.php';
?>
</body>
</html>