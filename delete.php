<?php
   require_once("includes/db.php");

  if(!isset($_GET['id'])){
     header("location: index.php");
   }
  
  $id = $_GET['id'];
  $sql= "DELETE FROM notes WHERE id='".$id."' LIMIT 1";
  
  if(!mysqli_query($conn, $sql)){
    $message = "Error! Please try later";
    "<script type='text/javascript'>alert('$message');</script>";
  }else{
    mysqli_query($conn, $sql);
    header("location: index.php");
  }
   ?>
