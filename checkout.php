<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
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
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="cart.html" class="breadcrumb">Cart</a>
        <a href="#!" class="breadcrumb">Address</a>
        <a href="#!" class="breadcrumb">Payment</a>
      </div>
    </div>
</nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>

<div class="line"></div>

<div id="blue" class="block blue">
  <nav class="pushpin-demo-nav" data-target="blue">
    <div class="nav-wrapper light-blue">
      <div class="container">
        <a href="#" class="brand-logo">Blue</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#!">Blue Link 1</a></li>
          <li><a href="#!">Blue Link 2</a></li>
          <li><a href="#!">Blue Link 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div id="red" class="block red lighten-1">
  <nav class="pushpin-demo-nav" data-target="red">
    <div class="nav-wrapper red">
      <div class="container">
        <a href="#" class="brand-logo">Red</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#!">Red Link 1</a></li>
          <li><a href="#!">Red Link 2</a></li>
          <li><a href="#!">Red Link 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div id="green" class="block green lighten-1">
  <nav class="pushpin-demo-nav" data-target="green">
    <div class="nav-wrapper green">
      <div class="container">
        <a href="#" class="brand-logo">Green</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#!">Green Link 1</a></li>
          <li><a href="#!">Green Link 2</a></li>
          <li><a href="#!">Green Link 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<script type="text/javascript">
  $('.pushpin-demo-nav').each(function() {
	var $this = $(this);
	var $target = $('#' + $(this).attr('data-target'));
	$this.pushpin({
	  top: $target.offset().top,
	  bottom: $target.offset().top + $target.outerHeight() - $this.height()
	});
  });
</script>

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
