<?php
include 'config.php';
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $srchfname = mysqli_real_escape_string($conn,$_POST['Fname']);
      $srchlname = mysqli_real_escape_string($conn,$_POST['Lname']); 
      
      $sql = "SELECT firstname, lastname FROM residents WHERE Firstname = '$srchfname' and Lastname = '$srchlname'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['find_user_fname'] = $srchfname;
         $_SESSION['find_user_lname'] = $srchlname;
         
         header("location: map-resident.php");
      }
      else {
         $error = "Cannot find resident";
      }
   }
?>

The person you are trying to find is not found.