<!DOCTYPE html>
<html>
<head>
	<title>add to cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style(3).css">
	<!--- sass styling --->
	<link rel="stylesheet" type="text/css" href="./scss/homepageStyles.css">
</head>
<body class="main-layout">
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.php"><img src="images/logo.jpg" alt="#" width="200" height="200"> </a> </div>
                        </div>
                     </div>
                  </div>
				  <table style = "width: 40%; margin: 30px auto; border-collapse: collapse; text-align: left;">
		<thead>
			<tr style = "border: none; height: 30px; padding: 2px; color:red;">
				<th><a href="index.php">Home</a></th>
				<th><a href="about.php">About</a></th>
				<th><a href="items.php">Place Order</a></th>
				<th><a href="contact.php">Contact Us</a></th>
				<th><a href="login.php">login</a></th>
				<th><a href="#"><img src="images/search_icon.png" alt="icon"/></a></th>
			</tr>
		</thead> 
	</table>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
	<div class="container-fluid" id="maincontainer">
		<div align="center" id="row1" class="row">
			<div class="col-md-4" style="padding-bottom: 15px;">
				<img src="images/milk.jpg">
				<div id="pro-info">
					<p class="product-name">Milk Candy</p><p class="product-price">N500</p>
					<button class="btn btn-secondary" id="btn1">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/drinks3.jpg">
				<div id="pro-info">
					<p class="product-name">Fresh Ginger Drink</p><p class="product-price">N200</p>
					<button class="btn btn-secondary" id="btn3">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/gpouch.jpg">
				<div id="pro-info">
					<p class="product-name">Milk Balls</p><p class="product-price">N500</p>
					<button class="btn btn-secondary" id="btn4">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/ipouch1.jpg">
				<div id="pro-info">
					<p class="product-name">Condensed Milk Candy</p><p class="product-price">N500</p>
					<button class="btn btn-secondary" id="btn5">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/doughnut2.jpg">
				<div id="pro-info">
					<p class="product-name">Glazed Doughnut Box of 4</p><p class="product-price">2000</p>
					<button class="btn btn-secondary" id="btn6">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/doughnut1.jpg">
				<div id="pro-info">
					<p class="product-name">Glazed Doughnut Box of 6</p><p class="product-price">3000</p>
					<button class="btn btn-secondary" id="btn7">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/drinks2.jpg">
				<div id="pro-info">
					<p class="product-name">Fresh zobo Drink</p><p class="product-price">200</p>
					<button class="btn btn-secondary" id="btn8">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/madara2.jpg">
				<div id="pro-info">
					<p class="product-name">Jumbo pack</p><p class="product-price">5000</p>
					<button class="btn btn-secondary" id="btn9">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/tofu1.jpg">
				<div id="pro-info">
					<p class="product-name">Awara(Tofu) Fried without Egg</p>
					<p class="product-price">N1000</p>
					<button class="btn btn-secondary" id="btn10">Buy Now</button>
				</div>
			</div>
			</div>
			<div align="center" id="row1" class="row">
			<div class="col-md-4">
				<img src="images/doughnut3.jpg">
				<div id="pro-info">
					<p class="product-name">Filled Doughnut Box of 12</p><p class="product-price">N6000</p>
					<button class="btn btn-secondary" id="btn11">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/tofu.jpg">
				<div id="pro-info">
					<p class="product-name">Awara(Tofu) Fried with Egg</p><p class="product-price">N1200</p>
					<button class="btn btn-secondary" id="btn12">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/gullisuwa2.jpg">
				<div id="pro-info">
					<p class="product-name">Milk Balls</p><p class="product-price">500</p>
					<button class="btn btn-secondary" id="btn13">Buy Now</button>
				</div>
			</div>
			</div>
	</div>

<div id="cartmain" class="container-fluid">
	<div class="container" id="cart">
		<div class="row">
			<div class="col-md-12" id="cart-heading" align="center">
				Shopping Cart
			</div>
		</div>
		<hr>
		<div class="row" id="table-row">
			<table class="table table-striped" id="item-table">
			  <thead>
			    <tr>
			      <th>Item Id</th>
			      <th>Product Name</th>
			      <th>Price</th>
			      <th>Quantity</th>
			      <th>Total</th>
			    </tr>
			  </thead>
			  <tbody id="item-table-body">

			  </tbody>
			</table>

		</div>
			<div class="row" align="center">
				<div class="col-md-12">
					<div>Grand Total : <label id="totalLabel">0</label>
				</div>
			</div>
		</div>
		<hr>

	</div>
</div>
			<div class="row">
				<div class="col-75">
					<div class="container">
						<form action="/action_page.php">
	
							<div class="row">
							<div class="col-50">
							<h3>Billing Address</h3>
							<label for="fname"><i class="fa fa-user"></i> Full Name</label>
							<input type="text" id="fname" name="firstname" placeholder="John M. Doe">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" id="email" name="email" placeholder="john@example.com">
							<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
							<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
							<label for="city"><i class="fa fa-institution"></i> City</label>
							<input type="text" id="city" name="city" placeholder="New York">
						<div class="col-50">
							<label for="zip">Zip</label>
								<input type="text" id="zip" name="zip" placeholder="10001">
									</div>
									</div>
									</div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2021">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>
<div id="about" class="container-fluid">	<!-- This div should contain Information about your company -->
	
	<div class="row" id="about-row">
		<div class="col-md-12" align="center">
		Copyright | Shop-Online
		</div>
	</div>

</div>

</body>
</html>