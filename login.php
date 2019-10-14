<?php
   
   //https://www.youtube.com/watch?v=8G7271LAyHY

   session_start(); //Starting Session
   $error = ''; //Variable to store error message

   if(isset($_POST['submit'])){
      if(empty($_POST['email_login']) || empty($_POST['password_login'])){
         $error = "Username or Password Invalid";
         header("location: error.html");
      }
      else{
         $email = $_POST['email_login'];
         $password = $_POST['password_login'];

         $host = "localhost";
         $dbUserName = "root";
         $dbPass = "2199";
         $dbName = "accounts";

         $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

         $query = "SELECT * from creds where email=? AND password=? LIMIT 1";

         //TO PROTECT AGAINST SQL INJECTIONS
         $stmt = $conn->prepare($query);
         $stmt->bind_param("ss", $email, $password); //s->string 
         $stmt->execute();
         $stmt->bind_result($email, $password);
         $stmt->store_result();

         if($stmt->fetch()){ //Fetching contents of row

            $_SESSION['login_user'] = $email; //Init Session
            header("location: main.php"); //Redirecting to main page
         }
         else{
            $error = "Username or Password Invalid";
            header("location: error.html"); //Redirecting to main page
         }
         mysqli_close();
      }
   }
   