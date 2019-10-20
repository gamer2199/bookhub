<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="main.php" class="pure-menu-link">
                <i class="fa fa-book fa-lg"></i> Catalog</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">
                <i class="fa fa-user fa-lg"></i> Profile</a></li>
        </ul>
    </div>
</div>

<div class="pure-g" style = "margin-top: 100px;">

    <!--Details Panel -->
    <div class="pure-u-16-24">
    
        <div class = "container">
            <h1 class="content-head">My Cart</h1>
            <table>
            <hr>
            <p> TEST </p>
            </table
        </div>
        
    </div>

    <!-- Cart Panel -->
    <div class="pure-u-8-24">
        <div class = "cart-container">
            <h1 class = "content-head"> Price Details </h1>
            <hr>
            <p> Price (N items): </p>
            <p> Delivery: </p>
            <hr>
            <p> Total Payable: </p>

            <div class = "is-center">
                <form action = "checkout.php">
                    <button class = "checkout-button" type="submit" name="action">Place Order</button>
                </form> 
            </div>
            
        </div>
    </div>

</body>
</html>