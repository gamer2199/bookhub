<?php

if(isset($_POST['email_check'])){
    
    $email = $_POST['email_check'];

    $conn = mysqli_connect("localhost", "root", "2199", "accounts");

    $sql = "SELECT email from creds where email= '".$_POST["email_check"]."' LIMIT 1";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        echo 'Email already registered';
    }
    else{
        echo 'You can proceed';
    }
    }

?>