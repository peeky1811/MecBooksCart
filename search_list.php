<?php
include 'connection.php';
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MecBooksCart|Search Books</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
        .column{
            background-color:#ddd;
            margin: 3%;
            padding: 5px 10px 5px 10px;
        }
        .btn{
            border:none;
            border-radius:4px;
            padding:11px;
            box-shadow:none;
            margin-top:35px;
            text-shadow:none;
            outline:none !important;
        }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php
            include 'navbar.php';
            //if user is not logged in
            if(!isset($_SESSION['username'])){
                header('location:login.php');
            }
        ?>
        <h1>
        <a href="buy.php" class="btn btn-primary btn-lg" style="margin:1%;">
        <span class="glyphicon glyphicon-chevron-left"></span> Go Back
    </a>These are the books you searched for:
    </h1>
        
            <div class="container">
            <?php
            $column_name = $_POST["column_name"];

            if(isset($_POST['dept']))
            {
                // echo $_POST["dept"];
                $value = $_POST["dept"];

            }  
            else if(isset($_POST['semester']))
            {
                // echo $_POST["semester"];
                $value = $_POST["semester"];
            }  
            else
            {
                // echo $_POST["as_per_choice"];
                $value = test_input($_POST["as_per_choice"]);
            }    
                
                
            
                $check=mysqli_query($con, "SELECT title, author, dept, semester, subjectcode, phone, fullname FROM  swap.book, swap.user WHERE book.username=user.username AND ".$column_name." LIKE '%".$value."%' ");
                if($check && $check->num_rows > 0){
                    while($li=mysqli_fetch_array($check))
                    {
                ?>
                        <div class="column">
                            <h2><b><?php echo 'Book Title: '?></b><?php echo $li["title"]?></h2>
                            <h4><b><?php echo 'Author Name: '?></b><?php echo $li["author"]?></h4>
                            <h4><b><?php echo 'Subject Code: '?></b><?php echo $li["subjectcode"]?></h4>
                            <h4><b><?php echo 'Semester: '?></b><?php echo $li["semester"]?></h4>
                            <h4><b><?php echo 'Department: '?></b><?php echo $li["dept"]?></h4>
                            <h4><b><?php echo 'Name of Seller: '?></b><?php echo $li["fullname"]?></h4>
                            <h4><b><?php echo 'Phone: '?></b><?php echo $li["phone"]?>
                                <input type="hidden" id="copyNumber" value="<?php echo $li["phone"];?>">
                                <button onclick="copyFunction()" class="glyphicon glyphicon-duplicate" style="background:none;
            border:none "></button>
                            </h4>
                        </div>
                <?php 
                    }
                }
                else{
                ?>
                    <script>
                        alert("No such books. Try another option.");
                        window.location.replace("buy.php");
                    </script>
                <?php
                }
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>
        </div>
        <script>
            function copyFunction(){
                var copyNumber=document.getElementById("copyNumber");
                copyNumber.type='text';
                copyNumber.select();
                copyNumber.setSelectionRange(0,99999);//for mobile devices
                document.execCommand("copy");
                copyNumber.type='hidden';
                alert("Copied the text:"+copyNumber.value);
            }
        </script>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
    <!-- /Footer -->
    </body>
</html>