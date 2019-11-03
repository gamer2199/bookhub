<?php

   session_start(); //Starting Session
   $error = ''; 
   $username = '';

   if(isset($_POST['submit'])){
      if(empty($_POST['email_login']) || empty($_POST['password_login'])){
         $error = "Username or Password Invalid";
         header("location: error.html");
      }
      else{
         $email = $_POST['email_login'];
         $password = $_POST['password_login'];

         $conn = mysqli_connect("localhost", "root", "2199", "accounts");

         $query = "SELECT * from creds where email=? AND password=? LIMIT 1";

         //TO PROTECT AGAINST SQL INJECTIONS
         $stmt = $conn->prepare($query);
         $stmt->bind_param("ss", $email, $password); //s->string 
         $stmt->execute();
         $stmt->bind_result($email, $password);
         $stmt->store_result();

         if($row = $stmt->fetch()){ //Fetching contents of row
            
            $_SESSION['login_user'] = $email; //Init Session
            $_SESSION['user_id'] = $row['id'];
            header("location: main.php"); //Redirecting to main page
         }
         else{
            $error = "Username or Password Invalid";
            header("location: error.html"); //Redirecting to main page
         }
         mysqli_close($conn);
      }
   }
?>