<?php

$host = "localhost";
$dbUserName = "root";
$dbPass = "2199";
$dbName = "accounts";

$conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

session_start(); //Starting Session

$user_check = $_SESSION['login_user']; //Storing Session

//SQL Query to fetch complete information of user
$query = 'SELECT email from login where email = "$user_check"';
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];

?>