<?php
session_start();

$_SESSION['message'] = '';

$host = "localhost";
$dbUserName = "root";
$dbPass = "2199";
$dbName = "accounts";

$conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Form Data
      
	$username =$_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']); //md5 hash password security
      
	if(!$username || !$password || !$email){

		echo "Empty Fields";
	}

	$sql = "INSERT INTO creds VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email_signup]', '$_POST[password_signup]')";

	$result = mysqli_query($conn,$sql);
	header("Location: main.php");
	mysqli_close($conn);

}

?>