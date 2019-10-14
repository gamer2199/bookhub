<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/checkout2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Catalog</a></li>
            <li class="pure-menu-item"><a href="signup.php" class="pure-menu-link">Profile</a></li>
        </ul>
    </div>
</div>

<div class="pure-g" style = "margin-top: 100px;">

    <div class="pure-u-18-24">

        <div class = "container">
            <form action = "" method = "POST" enctype="multipart/form-data" autocomplete="off">
            <div class = "pure-g">
                <div class = "pure-u-1-2">

                    <h1 class="content-head content-head-ribbon">Shipping Details</h1>

                    <input id="email_login" name = "email_login" type="text" placeholder = "Full Name" required>
                                
                    <input id="email_login" name = "email_login" type="text" placeholder = "Apartment/Flat No." required>
                                    
                    <input id="password_login" name = "password_login" type="password" placeholder = "Society Name/Street" required>

                    <input id="email_login" name = "email_login" type="text" placeholder = "City" required>
                                    
                    <input id="password_login" name = "password_login" type="password" placeholder = "Pincode" required>
                                    
                </div>

                <div class = "pure-u-1-2">

                    <h1 class="content-head content-head-ribbon">Payment</h1>

                    <input id="email_login" name = "email_login" type="text" placeholder = "Name on Card" required>
                                
                    <input id="email_login" name = "email_login" type="text" placeholder = "Card Number" required>
                                    
                    <input id="password_login" name = "password_login" type="password" placeholder = "Expiry Month" required>
                    
                    <input id="password_login" name = "password_login" type="password" placeholder = "Expiry Year" required>

                    <input id="password_login" name = "password_login" type="password" placeholder = "CVV" required>


                </div>

            </div>
            <button class="pure-button pure-button-login" type="submit" name="action">Checkout</button>
            </form>
        </div>
        
    </div>

    <div class="pure-u-6-24">
        <p>Cart</p>
    </div>


</div>

</body>
</html>