<?php
   session_start();

   $_SESSION['message'] = '';
   $_SESSION['login_user'] = '';

   $host = "localhost";
   $dbUserName = "root";
   $dbPass = "2199";
   $dbName = "accounts";

   $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

   $query = "select * from book_records";
   $result = mysqli_query($conn,$query);
?>