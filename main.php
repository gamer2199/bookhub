<?php

include('session.php');
if (!isset($_SESSION['login_user'])){
    header('location: index.php');
}

require_once('dbcontroller.php');
$db_handle = new DBController();

if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            if(!empty($_POST["quantity"])) {
                $prodID = $db_handle->runQuery("SELECT * from book_data where id='" . $_GET["id"]. "'");
                $itemArray = array($prodID[0]["id"]=>array('name'=>$prodID[0]["title"], 'id'=>$prodID[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$prodID[0]["price"], 'image'=>$prodID[0]["cover"]));
                
                if(!empty($_SESSION["cart_item"])) {
                    if(in_array($prodID[0]["id"],array_keys($_SESSION["cart_item"]))) {
                        foreach($_SESSION["cart_item"] as $k => $v) {
                                if($prodID[0]["id"] == $k) {
                                    if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                        $_SESSION["cart_item"][$k]["quantity"] = 0;
                                    }
                                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
        break;
        case "remove":
            if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                        if($_GET["id"] == $k){
                            unset($_SESSION["cart_item"][$k]);	}			
                        if(empty($_SESSION["cart_item"])){
                            unset($_SESSION["cart_item"]);}
                }
            }
        break;
        case "empty":
            unset($_SESSION["cart_item"]);
        break;	
    }
}

$rupee = "₹";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">BookHub</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="logout.php" class="pure-menu-link">
                <i class="fa fa-sign-out fa-lg"></i> Log Out</a></li>
        </ul>
    </div>
</div>

<div class="pure-g" style = "margin-top: 100px;">

    <!-- Products Panel -->
    <div class="pure-u-16-24">

        <div id="flex">

            <?php
                
                $book_array = $db_handle->runQuery("SELECT * from book_data order by id ASC");
                if (!empty($book_array)){
                    foreach($book_array as $key=>$value){
                        ?>
                        <div class = 'book-flex'>
                            <div class = 'book-flex-in is-center'>
                                <form method="post" action="main.php?action=add&id=<?php echo $book_array[$key]["id"]; ?>">
                                    <img class  = "book-img" src="data:image/jpeg;base64,<?php echo base64_encode( $book_array[$key]["cover"] ); ?>" />
                                    <p class = 'book-name'><?php echo $book_array[$key]["title"]; ?></p>
                                    <p class = 'book-author'><?php echo $book_array[$key]["author"]; ?> </p>
                                    <p class = 'book-price'> Price: <?php echo $rupee . $book_array[$key]["price"]; ?></p>
                                    <p class = 'book-quant'> Quantity: <input class='book-quantity' type='number' name='quantity' value='1' size='1'/> </p>
                                    <input class = 'book-add' type='submit' name='action' value = "Add To Cart" />
                                </form>
                            </div>
                        </div>
                        <?php
                    }           
                }
                ?>

        </div>
    </div>

    <!--Cart Panel -->
    <div class="pure-u-7-24">
        <div class="card">
            <h1 class="content-head"> <i class="fa fa-shopping-cart fa-lg"></i> My Cart</h1>
            <hr>
            
            <?php
                if(isset($_SESSION["cart_item"])){
                    $total_quantity = 0;
                    $total_price = 0;
                ?>	
                <table>
                    <tr>
                        <th style = "width:300px;">Name</th>
                        <th style = "width:100px;">Quantity</th>
                        <th style = "width:200px;">Unit Price</th>
                        <th style = "width:200px;">Price</th>
                        <th style = "width:200px;">Remove</th>
                    </tr>	
                <?php
                    		
                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["price"];
                        ?>
                            <tr>
                                <td style = "text-align:center;"><?php echo $item["name"]; ?></td>
                                <td style = "text-align:center;"><?php echo $item["quantity"]; ?></td>
                                <td style = "text-align:center;"><?php echo $rupee .$item["price"]; ?></td>
                                <td style = "text-align:center;"><?php echo $rupee . number_format($item_price,2); ?></td>
                                <td style="text-align:center;"><a href="main.php?action=remove&id=<?php echo $item["id"]; ?>"><img src="css/icon-delete.png" alt="Remove Item" /></a></td>
                            </tr>
                            <?php
                                $total_quantity += $item["quantity"];
                                $total_price += ($item["price"]*$item["quantity"]);
                        }
                            ?>

                </table>
                <hr>
                <table>
                    <tr>
                        <td><h3 class="content-head">Total: <?php echo $rupee . number_format($total_price, 2); ?> </h3></td>
                        <td><a style = "margin-left:300px;" id="btnEmpty" href="main.php?action=empty">Empty Cart</a></td>
                    </tr>
                </table>
                <div class = "is-center">
                    <form action = "checkout.php">
                        <button class = "checkout-button" type="submit" name="action">Place Order</button>
                    </form> 
                </div>
                <?php
                } else {
                ?>
                    <div class="no-records">Your Cart is Empty</div>
                <?php 
                }
                ?>

        </div>
    </div>

</div>

</body>
</html>