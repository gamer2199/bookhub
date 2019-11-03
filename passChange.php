<?php
	if(isset($_POST['reset'])) {
		$conn = mysqli_connect("localhost", "root", "2199", "accounts");
		$sql = "UPDATE creds SET password = '" . $_POST["reset_pass_confirm"]. "' WHERE email = '" . $_GET["email"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		mysqli_close($conn);
        header('location: index.php');
		
	}
?>