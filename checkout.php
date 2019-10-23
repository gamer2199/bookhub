<?php
include('session.php');
if (!isset($_SESSION['login_user'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/checkout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="main.php" class="pure-menu-link">
                <i class="fa fa-book fa-lg"></i> Catalog</a></li>
        </ul>
    </div>
</div>

    
<div class = "container" style = "margin-top: 150px;">

    <form method = "POST" action = "final.php" enctype="multipart/form-data" autocomplete="off">
    <div class = "pure-g">
        <div class = "pure-u-1-2">
            <h1 class="content-head">Shipping Details</h1>

            <label for="fullName"> Full Name </label>
            <input id="chkout_name" name = "chkout_name" type="text" placeholder = "Walter White" required>
                        
            <label for="apt-flat"> Apartment/Flat No. </label>
            <input id="chkout_apt" name = "chkout_apt" type="text" placeholder = "123 Block D" required>
                            
            <label for="street"> Street </label>
            <input id="chkout_street" name = "chkout_street" type="text" placeholder = "90 Feet" required>

            <label for="city"> City </label>
            <input id="chkout_city" name = "chkout_city" type="text" placeholder = "Mumbai" required>
                            
            <label for="pincode"> Pincode </label>
            <input id="chkout_pincode" name = "chkout_pincode" type="text" placeholder = "XXXXXX" required>
        </div>

        <div class = "pure-u-1-2">
            <h1 class="content-head">Payment</h1>

            <div class = "icon-container">
                <label for = "icon-container"> Cards Accepted </label>
                <img src="css/cards.png" alt="" style="height: 60px; width: 300px;">
            </div>

            <label for="card_name"> Name on Card </label>
            <input id="chk_cardName" name = "chk_cardName" type="text" placeholder = "Walter White" required>
                        
            <label for="card_no"> Card Number </label>
            <input id="chk_cardNo" name = "chk_cardNo" type="text" placeholder = "1111-222-3333-4444." required>
                            
            <label for="exp_month"> Expiry Month </label>
            <input id="chk_cardExpMonth" name = "chk_cardExpMonth" type="text" placeholder = "January" required>

            <div class = "pure-g">
                <div class = "pure-u-1-2">
                    <label for="exp_year"> Expiry Year </label>
                    <input id="chk_cardExpYear" name = "chk_cardExpYear" type="text" placeholder = "2020" style="width:60%;" required>
                </div>
                <div class = "pure-u-1-2">
                    <label for="cvv"> CVV </label>
                    <input id="chk_cvv" name = "chk_cvv" type="text" placeholder = "999" style="width:60%;" required>
                </div>
            </div>

        </div>
    </div>

    <div class = "is-center">
        <button class = "checkout-button" type="submit" name="action">Checkout</button> 
    </div>
    </form>
    
</div>
        
</body>
</html>