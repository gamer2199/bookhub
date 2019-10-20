<!doctype html>
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
            <li class="pure-menu-item"><a href="signup.php" class="pure-menu-link">
                <i class="fa fa-user fa-lg"></i> Profile</a></li>
        </ul>
    </div>
</div>

<!-- <div class="pure-g" style = "margin-top: 100px;"> -->

    <!--Details Panel -->
    <!-- <div class="pure-u-24-24"> -->
    
        <div class = "container" style = "margin-top: 150px;">

            <div class = "pure-g">
                <div class = "pure-u-1-2">
                    <h1 class="content-head">Shipping Details</h1>

                    <label for="fullName"> Full Name </label>
                    <input id="email_login" name = "email_login" type="text" placeholder = "Walter White" required>
                                
                    <label for="fullName"> Apartment/Flat No. </label>
                    <input id="email_login" name = "email_login" type="text" placeholder = "123 Block D" required>
                                    
                    <label for="fullName"> Street </label>
                    <input id="password_login" name = "password_login" type="text" placeholder = "90 Feet" required>

                    <label for="fullName"> City </label>
                    <input id="email_login" name = "email_login" type="text" placeholder = "Mumbai" required>
                                    
                    <label for="fullName"> Pincode </label>
                    <input id="password_login" name = "password_login" type="text" placeholder = "XXXXXX" required>
                </div>

                <div class = "pure-u-1-2">
                    <h1 class="content-head">Payment</h1>

                    <div class = "icon-container">
                        <label for = "icon-container"> Cards Accepted </label>
                        <img src="css/cards.png" alt="" style="height: 60px; width: 300px;">
                    </div>

                    <label for="fullName"> Name on Card </label>
                    <input id="email_login" name = "email_login" type="text" placeholder = "Walter White" required>
                                
                    <label for="fullName"> Card Number </label>
                    <input id="email_login" name = "email_login" type="text" placeholder = "1111-222-3333-4444." required>
                                    
                    <label for="fullName"> Expiry Month </label>
                    <input id="password_login" name = "password_login" type="text" placeholder = "January" required>

                    <div class = "pure-g">
                        <div class = "pure-u-1-2">
                            <label for="fullName"> Expiry Year </label>
                            <input id="email_login" name = "email_login" type="text" placeholder = "2020" style="width:60%;" required>
                        </div>
                        <div class = "pure-u-1-2">
                            <label for="fullName"> CVV </label>
                            <input id="password_login" name = "password_login" type="text" placeholder = "999" style="width:60%;" required>
                        </div>
                    </div>

                </div>
            </div>

            <div class = "is-center">
                <button class = "checkout-button" type="submit" name="action">Checkout</button> 
            </div>
            
        </div>
        
    <!-- </div> -->

    <!-- Cart Panel -->
    <!-- <div class="pure-u-8-24">
        <div class = "cart-container">
        <h1 class = "content-head"> <i class="fa fa-shopping-cart fa-lg"></i> Cart </h1>
            <table>
            <tr>
                <th>Book Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php
                $host = "localhost";
                $dbUserName = "root"; 
                $dbPass = "2199"; 
                $dbName = "books";

                $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

                if($conn->connect_error){
                die("Connection Failed: " . $conn->connect_error);
                }

                $query = "select title,author,price,cover from book_data";
                $result = mysqli_query($conn,$query);

                if(mysqli_num_rows($result) > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr>";
                    
                    echo "<td>"; echo $row['title']; echo "</td>";
                    echo "<td>"; echo $row['price']; echo "</td>";
                    echo "<td>"; echo "<input id='cart_quant' name = 'cart_quant' type='number' placeholder = 'Quantity' required>"; echo "</td>";
                }
                echo "</table>";
                echo "<hr>";
                echo "<h1> Total: </h1>";
                }
                else{
                    echo "0 Result";
                    }
                    $conn->close();
            ?>
            </table>
        </div>
    </div> -->


<!-- </div> -->

</body>
</html>