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
</nav>

<div id="blue" class="block"> <!-- Add Color next to block for color -->
  <nav class="pushpin-demo-nav" data-target="blue">
    <div class="nav-wrapper light-blue">
      <div class="container">
        <a href="#" class="brand-logo">Cart Details</a>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1"> <!-- Card Color -->
        <div class="card-content white-text">
          <span class="card-title">Cart_DETAILS</span>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="red" class="block">
  <nav class="pushpin-demo-nav" data-target="red">
    <div class="nav-wrapper red">
      <div class="container">
        <a href="#" class="brand-logo">Shipping Address</a>
      </div>
    </div>
  </nav>

<div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <form action = "order.php" method = "POST" enctype="multipart/form-data" autocomplete="off">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname_checkout" name="fname_checkout">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email_checkout" name="email_checkout">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address_checkout" name="address_checkout">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city_checkout" name="city_checkout">
            <label for="state">State</label>
            <input type="text" id="state_checkout" name="state_checkout">
            <label for="zip">Zip</label>
            <input type="text" id="zip_checkout" name="zip_checkout">
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="green" class="block">
  <nav class="pushpin-demo-nav" data-target="green">
    <div class="nav-wrapper green">
      <div class="container">
        <a href="#" class="brand-logo">Payment</a>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear" placeholder="2018">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">
        </div>
      </div>
    </div>
  </div>

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