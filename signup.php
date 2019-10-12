    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="css/signup.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    </head>
    <body>

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="">BookHub</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign In</a></li>
            </ul>
        </div>
    </div>

    <div class="content">

            <div class="outer">
                <div class="middle">
                    <div class="inner">
                        <div class = "container" id=container style="background: url(css/gradient.jpg) repeat;">

                                <form class="col" action = "" method = "POST" enctype="multipart/form-data" autocomplete="off">
                                    <h1 style="text-align:center; color: white;">Create Account</h1>

                                    <h4 style="text-align: center; color: white;">Start your journey down the valley of books</h4>

                                    <input id="first_name" name = "first_name" type="text" placeholder = "First Name" required>
                                    <input id="last_name" name = "last_name" type="text" placeholder = "Last Name" required>

                                    <input id="email_signup" name = "email_signup" type="text" placeholder = "Email" required>
                                
                                    <input id="password_signup" name = "password_signup" type="password" placeholder = "Password" required>
                    
                                    <button class="pure-button pure-button-login" type="submit" name="action">SIGN UP</button>

                                    <a href = "index.php"> Already have an account? </a>
                                    
                                </form>
                        </div>
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


    </body>
    </html>