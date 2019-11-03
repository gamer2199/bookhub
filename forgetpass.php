<?php
include('resetMail.php'); 
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/forgetpass.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="signup.php" class="pure-menu-link">
                <i class="fa fa-users fa-lg"></i> Sign Up</a></li>
            <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">
                <i class="fa fa-user fa-lg"></i> Sign In</a></li>
        </ul>
    </div>
</div>

<div class="content">

    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class = "container" id="login" style="background: url(css/gradient.jpg) repeat;">

                        <form name="forgpass" class="col" action = "" method = "POST" enctype="multipart/form-data" autocomplete="off" onsubmit = "return validateEmail()">
                            <h1 style="text-align:center; color: white; margin-top:50px;">Password Reset</h1>

                            <h4 style="text-align: center; color: white;">Enter your email</h4>

                            <input id="email_forg" name = "email_forg" type="text" placeholder = "Email" required>
            
                            <button class="pure-button pure-button-login" type="submit" name="submit">SUBMIT</button>
                        
                            <p style = "color:white; margin-top: 50px;"> A link to reset your password will be sent to your registered email.</p>
                            
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

function validateEmail() {
    var sEmail = document.forms["forgpass"]["email_forg"].value;
    var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(!sEmail.match(reEmail) || sEmail=="") {
    alert("Invalid Email Address");
    return false;
  }

  else{
  return true;
  }
}

</script>


</body>
</html>