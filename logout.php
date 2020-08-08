<?php
   session_start();
   //if user is not logged in
   if(!isset($_SESSION['username'])){
      header('location:login.php');
   }
   if(session_destroy()) {
      header("Location: login.php");
   }
?>