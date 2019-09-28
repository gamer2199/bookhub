<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

<nav class="nav-extended blue darken-3">
  <div class="nav-wrapper">
    <a href="main.php" class="brand-logo">BookHub</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="profile.html">Profile</a></li>
      </ul>
  </div>
</nav>

<div class="line"></div>

<div class="menu">
  <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" placeholder="Search" required>
        </div>
      </form>
    </div>
  </nav> 

  <form action="#">
    <p> New Arrivals </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Last 30 Days</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Last 60 Days</span>
      </label>
    </p>

    <p> Price Range </p>
    <div class="row"> 
      <div class="input-field col s12 m6">
        <select class="browser-default">
          <option value="1">0</option>
          <option value="2">500</option>
          <option value="3">1000</option>
        </select>
      </div>
      <div class="input-field col s12 m6">
        <select class="browser-default">
          <option value="1">0</option>
          <option value="2">500</option>
          <option value="3">1000</option>
        </select>
      </div>
    </div>

    <p> Languages </p>
    <div class="row"> 
      <div class="input-field col s12 m6">
        <select class="browser-default">
          <option value="1">English</option>
          <option value="2">Hindi</option>
          <option value="3">Marathi</option>
        </select>
      </div>
    </div>
  </form>
         
</div>

<div class="main">

  <div class="row">
    <table class="responsive-table">
      <tr>
        <th>Cover</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Price</th>
        <th></th>
      </tr>
      <?php
        $host = "localhost";
        $dbUserName = "root"; //Enter "kapil" for college
        $dbPass = "2199"; // Enter "goodwill2199" for college
        $dbName = "accounts";

        $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

        if($conn->connect_error){
          die("Connection Failed: " . $conn->connect_error);
        }

        $query = "select bookname,price,author,bookcover from book_records";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
          while($row = $result-> fetch_assoc()){
            echo "<tr>";

            echo "<td>";?> 
            <img src="<?php echo $row['bookcover']; ?>" height="100" width="100">
            <?php echo "</td>"; 
            
            echo "<td>"; echo $row['bookname']; echo "</td>";
            echo "<td>"; echo $row['author']; echo "</td>";
            echo "<td>"; echo $row['price']; echo "</td>";
            // echo "<td> <button class='btn waves-effect waves-light red darken-2' type='submit' name='action'>Add to Cart</button> </td>";
          }
          echo "</table>";
        }
        else{
              echo "0 Result";
            }
            $conn->close();
      ?>
      </table>
  </div>

</div>

</body>
</html>