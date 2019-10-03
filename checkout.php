<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

<!-- Cart Details Pushpin -->
<div id="blue" class="block blue"> <!-- Add Color next to block for color -->

  <nav class="pushpin-demo-nav" data-target="blue">
    <div class="nav-wrapper light-blue">
      <div class="container">
        <span class="brand-logo">Cart Details</a>
      </div>
    </div>
  </nav>
  
  

  <!-- <div class="row">
    <div class="col s12"> -->
	<!-- Card Color -->
      <!-- <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Cart_DETAILS</span>
        </div>
      </div>
    </div>
  </div> -->

</div>

<!-- Shipping Address Pushpin -->
<div id="red" class="block red">
  <nav class="pushpin-demo-nav" data-target="red">
    <div class="nav-wrapper red">
      <div class="container">
        <a href="#" class="brand-logo">Shipping Address</a>
      </div>
    </div>
  </nav>

<!-- <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
        	<form action = "order.php" method = "POST" enctype="multipart/form-data" autocomplete="off">

	            <div class="row">
	            	<div class="input-field">
	                  <input id="name_checkout" name = "name_checkout" type="text" class="validate">
	                  <label for="name_checkout">Full Name</label>
	                </div>
	            </div>

	            <div class="row">
	                <div class="input-field">
	                  <input id="street_checkout" name = "street_checkout" type="text" class="validate">
	                  <label for="street_checkout">Street</label>
	                </div>
	            </div>

	            <div class="row">
	                <div class="input-field">
	                  <input id="city_checkout" name = "city_checkout" type="text" class="validate">
	                  <label for="city_checkout">City</label>
	                </div>
	            </div>

	            <div class="row">
	                <div class="input-field">
	                  <input id="state_checkout" name = "state_checkout" type="text" class="validate">
	                  <label for="state_checkout">State</label>
	                </div>
	            </div>

	            <div class="row">
	                <div class="input-field">
	                  <input id="zip_checkout" name = "zip_checkout" type="text" class="validate">
	                  <label for="zip_checkout">Zip</label>
	                </div>
	            </div>
        	</form>
        </div>
      </div>
    </div>
  </div>

</div> -->

<!-- Payment Pushpin -->
<div id="green" class="block green">
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

        	<div class="row">
	            <div class="input-field">
	                <input id="cname" name = "cname" type="text" class="validate">
	                <label for="cname">Name on Card</label>
	            </div>
	        </div>

	        <div class="row">
	            <div class="input-field">
	                <input id="cno" name = "cno" type="text" class="validate">
	                <label for="cno">Card Number</label>
	            </div>
	        </div>

	        <div class="row">
	            <div class="input-field">
	                <input id="card_expiry_month" name = "card_expiry_month" type="text" class="validate">
	                <label for="card_expiry_month">Card Expiry Month</label>
	            </div>
	        </div>

	        <div class="row">
	            <div class="input-field">
	                <input id="card_expiry_year" name = "card_expiry_year" type="text" class="validate">
	                <label for="card_expiry_year">Card Expiry Year</label>
	            </div>
	        </div>

	        <div class="row">
	            <div class="input-field">
	                <input id="card_cvv" name = "card_cvv" type="text" class="validate">
	                <label for="card_cvv">CVV</label>
	            </div>
	        </div>
	        
        </div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function() {
  var pushpins = document.querySelectorAll(".pushpin-demo-nav");
  pushpins.forEach(function(element) {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var elemRect = element.getBoundingClientRect();
    var parentRect = element.parentElement.getBoundingClientRect();
    var elemTop = scrollTop + elemRect.top;

    var instancePushpin = M.Pushpin.init(element, {
      top: elemTop,
      bottom: elemTop + parentRect.height - elemRect.height
    });
  })
});
</script>

</body>
</html>