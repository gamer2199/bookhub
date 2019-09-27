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
</style>
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
            <input id="search" type="search" required>
            <label class="label-icon" for="search">Search</label>
          </div>
      </form>
    </div>
  </nav>  
</div>

</div>


<div class="main">

  <div class="row">
    <table class="responsive-table">
      <tr>
        <th>Cover</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Price</th>
      </tr>
      <?php
        $host = "localhost";
        $dbUserName = "kapil"; //Enter "kapil" for college
        $dbPass = "goodwill2199"; // Enter "goodwill2199" for college
        $dbName = "accounts";

        $conn = mysqli_connect($host, $dbUserName, $dbPass, $dbName);

        if($conn->connect_error){
          die("Connection Failed: " . $conn->connect_error);
        }

        $query = "select bookname,price,author,bookcover from book_records";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
          while($row = $result-> fetch_assoc()){
            echo 
              "<tr>
              <td><img src='data:image/jpeg;base64,'". base64_encode($row["bookcover"]) ."/></td>
              <td>". $row["bookname"] ."</td>
              <td>". $row["author"] ."</td>
              <td>" .$row["price"] . "</td>
              </tr>";
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


     <!--  <div class="col s4"> -->
        <!-- Promo Content 1 goes here -->
        <!-- <div class="row">
          <div class="col s12 m7">
            <div class="card">
              <div class="card-image">
                <img src="test.jpg">
              </div>
              <div class="card-content">
                <h5> Book Title </h5>
                <p> Book Desc </p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

     <!--  <div class="col s4"> -->
        <!-- Promo Content 1 goes here -->
       <!--  <div class="row">
          <div class="col s12 m7">
            <div class="card">
              <div class="card-image">
                <img src="test.jpg">
              </div>
              <div class="card-content">
                <h5> Book Title </h5>
                <p> Book Desc </p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s4">
        Promo Content 1 goes here
        <div class="row">
          <div class="col s12 m7">
            <div class="card">
              <div class="card-image">
                <img src="test.jpg">
              </div>
              <div class="card-content">
                <h5> Book Title </h5>
                <p> Book Desc </p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div> -->
