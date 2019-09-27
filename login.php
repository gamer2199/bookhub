<?php
   session_start();

   $_SESSION['message'] = '';
   $_SESSION['login_user'] = '';

   $host = "localhost";
   $dbUserName = "kapil";
   $dbPass = "goodwill2199";
   $dbName = "accounts";

   $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM creds WHERE email = '$_POST[email_login]' and password = '$_POST[password_login]'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register($_POST[username]);
         $_SESSION['login_user'] = $_POST[email_login];
         
         header("location: main.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: error.html");
      }
   }
?>