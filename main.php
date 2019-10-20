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
            <li class="pure-menu-item"><a href="cart.php" class="pure-menu-link">
                <i class="fa fa-shopping-cart fa-lg"></i> Cart</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">
                <i class="fa fa-user fa-lg"></i> Profile</a></li>
        </ul>
    </div>
</div>

<div class="pure-g" style = "margin-top: 100px;">

    <!--Filter Panel -->
    <div class="pure-u-6-24">
        <div class="card">
            
            <h1> Filter </h1>
            <hr>
            
            <h3><i class="fa fa-rupee fa-lg"></i> Price </h3>
            <div class="slidecontainer">
                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
            </div>

            <h3><i class="fa fa-language fa-lg"></i> Languages </h3>
            <p> English </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>
            
            <p> Hindi </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>
            
            <p> Marathi </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>

            <h3><i class="fa fa-history fa-lg"></i> Latest Arrivals </h3>
            <p> Last 30 Days </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>
            
            <p> Last 90 Days </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>
            
            <p> Last 150 Days </p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider-lang"></span>
            </label>

        </div>
    </div>

    <!-- Products Panel -->
    <div class="pure-u-18-24">

        <div id="flex">

            <?php
                    $host = "localhost";
                    $dbUserName = "root"; 
                    $dbPass = "2199"; 
                    $dbName = "books";

                    $rupee = "₹";
        
                    $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);
        
                    if($conn->connect_error){
                    die("Connection Failed: " . $conn->connect_error);
                    }
        
                    $query = "select title,author,price,cover from book_data";
                    $result = mysqli_query($conn,$query);
        
                    if(mysqli_num_rows($result) > 0){
                        while($row = $result-> fetch_assoc()){

                            echo "<div class = 'book-flex'>";
                            echo "<div class = 'book-flex-in is-center'>";
                            ?>
                                <img class  = "book-img" src="data:image/jpeg;base64,<?php echo base64_encode( $row['cover'] ); ?>" />
                            <?

                                echo "<p class = 'book-name'>"; echo $row['title']; echo "</h3>";
                                echo "<p class = 'book-author'> By: "; echo $row['author']; echo "</p>";
                                echo "<p class = 'book-price'> Price: "; echo $rupee . $row['price']; echo "</p>";
                                echo "<button class = 'book-add' type='submit' name='action'>Add to Cart</button>";
                            echo "</div>";
                            //echo "</div>";
        
                            echo "</div>";
                        }
                    }
                    else{
                        echo "0 Result";
                    }
                    $conn->close();
            ?>

        </div>
    </div>
</div>

</body>
</html>