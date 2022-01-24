<?php
include 'config.php';
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT usernames, passwords FROM admins WHERE usernames = '$myusername' and passwords = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: home-page.php");
      }
      else {
         $error = "Username or Password is invalid";
      }
   }

   function function_alert($message) {
         echo "<script>alert('$message');</script>";
   }
      
      
   function_alert("Username or Password is invalid");
?>

