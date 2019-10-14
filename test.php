<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="css/index.css"> 
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 

  </head>
  <body>

  <div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
      <a class="pure-menu-heading" href="">BookHub</a>
      <ul class="pure-menu-list">
        
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
      </ul>
    </div>
  </div>

  <!-- Page Layout here -->
  <div class="row" style="margin-top: 100px;">
    <div class="col s3">
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
    </div>

    <div class="col s9">
      <table>
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

              echo "<td>";?> 
              <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['cover'] ); ?>" width="150" height="250" />
              <?php echo "</td>"; 
              
              echo "<td>"; echo $row['title']; echo "</td>";
              echo "<td>"; echo $row['author']; echo "</td>";
              echo "<td>"; echo $row['price']; echo "</td>";
              echo "<td> <button class='btn waves-effect waves-light red darken-2' type='submit' name='action'>Add to Cart</button> </td>";
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