<?php
include('passChange.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>
    </div>
</div>

<div class="content">

    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class = "container" id="login" style="background: url(css/gradient.jpg) repeat;">

                        <form name = "pass_reset" class="col" action = "" method = "POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return validateFields()">
                            <h1 style="text-align:center; color: white; margin-top:50px;">Reset Password</h1>

                            <h4 style="text-align: center; color: white;">Enter Password</h4>

                            <input id="reset_pass" name = "reset_pass" type="password" placeholder = "New Password" required>

                            <input id="reset_pass_confirm" name = "reset_pass_confirm" type="password" placeholder = "Confirm Password" required>
            
                            <button class="pure-button pure-button-login" type="submit" name="reset">RESET</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
    

</div>

<div class="content-wrapper">

    <div class="ribbon l-box-lrg pure-g">
        <div class="pure-u-1 is-center">

            <h1 class="content-head content-head-ribbon">Welcome to BookHub</h1>

            <p>The Reader's Heaven</p>
            <p>The place where you can fulfil your reading addiction</p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">We would love to hear your feedback</h2>

        <div class="pure-g is-center">

            <div class="pure-u-1">
                <h4>Contact Us</h4>
                <p>Email: support@bookhub.com</p>
                <p>Helpline: 1800-XX-XXX</p>

                <h4>More Information</h4>
                <p>Follow our Social Media for the lastest offers</p>
            </div>
        </div>

    </div>
</div>

<script>
function validateFields(){

var password=document.forms["pass_reset"]["reset_pass"].value; 
var confirmPassword=document.forms["pass_reset"]["reset_pass_confirm"].value 

if(password.length < 8 || confirmPassword.length < 8){
    alert("Password should contain atleast 8 charachters");
    return false;
    }
else if(password!=confirmPassword){
    alert("Password do not match");
}
else{
    return true;
    }
}
</script>

</body>
</html>