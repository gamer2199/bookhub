<?php

$host = "localhost";
$dbUserName = "root";
$dbPass = "2199";
$dbName = "accounts";

$conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

session_start(); //Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from creds where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>