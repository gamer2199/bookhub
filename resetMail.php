<?php

define("PROJECT_HOME", "http://localhost/bookhub");
require_once('PHPMailer/PHPMailerAutoload.php');

	if(isset($_POST['submit'])){

		if(!empty($_POST["email_forg"])){
			$conn = mysqli_connect("localhost", "root", "2199", "accounts");
			
			$condition = " where email = '" . $_POST["email_forg"] . "'";
			//$condition = " where " . $condition;

			$sql = "select * from creds " . $condition;
			$result = mysqli_query($conn,$sql);
			$user = mysqli_fetch_array($result);
			
			if(!empty($user)) {

				$mail = new PHPMailer();

				$emailBody = "<div>" . $user["firstname"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "/reset_pass.php?email=" . $user["email"] . "'>" . PROJECT_HOME . "/reset_pass.php?email=" . $user["email"] . "</a><br><br></p>Regards,<br> Admin.</div>";

				$mail->IsSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl";
				$mail->Port     = '465';  
				$mail->Host     = 'smtp.gmail.com';
				$mail->IsHTML(true);
				$mail->Username = 'bookhubproject@gmail.com';
				$mail->Password = '';
				$mail->SetFrom('no-reply@bookhub.com');
				$mail->AddAddress($user["email"]);
				$mail->Subject = "Password Recovery";		
				$mail->MsgHTML($emailBody);


				if(!$mail->Send()) {
					$error_message = 'Problem in Sending Password Recovery Email';
				} else {
					$success_message = 'Please check your email to reset password!';
				}
		}

		mysqli_close($conn);

		} else {
			$error_message = 'No User Found';
		}
	}
?>
