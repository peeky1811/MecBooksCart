<?php 
    include 'connection.php';
    session_start();
    //if user is not logged in
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
        if(isset($_POST['delete'])!='')
        {
            $isbn=$_POST['isbn'];
            $delete_1=mysqli_query($con, "DELETE FROM book WHERE isbn='$isbn'");
            if($delete_1)
            { 
?>
<script type="text/javascript">    
    alert ("Book deleted successfully ");
    window.location.replace("sell_list.php");
</script>
<?php
            }
        }
        else{
            ?>
            <script>
                alert("Please select a book");
                window.location.replace("sell_list.php");
            </script>
            <?php
        }       