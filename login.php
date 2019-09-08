<?php
   session_start();

   $_SESSION['message'] = '';
   $_SESSION['login_user'] = '';

   $host = "localhost";
   $dbUserName = "root";
   $dbPass = "2199";
   $dbName = "accounts";

   $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM creds WHERE username = '$_POST[username]' and password = '$_POST[password]'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register($_POST[username]);
         $_SESSION['login_user'] = $_POST[username];
         
         header("location: main.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: test.html");
      }
   }
?>