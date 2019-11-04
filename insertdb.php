<?php
session_start();

$_SESSION['message'] = '';

$conn = mysqli_connect("localhost", "root", "2199", "accounts");

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$sql = "INSERT INTO creds(firstname, lastname, email,password) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email_signup]', '$_POST[password_signup]')";

	$result = mysqli_query($conn,$sql);

	header("Location: main.php");
	mysqli_close($conn);

}

?>