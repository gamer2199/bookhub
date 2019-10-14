<?php
session_start();

$_SESSION['message'] = '';

$host = "localhost";
$dbUserName = "root";
$dbPass = "2199";
$dbName = "accounts";

$conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

if($_SERVER["REQUEST_METHOD"] == "POST") {


	$sql = "INSERT INTO creds(firstname, lastname, email,password) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email_signup]', '$_POST[password_signup]')";

	$result = mysqli_query($conn,$sql);
	//header("Location: main.php");
	mysqli_close($conn);

}

?>