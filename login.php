<?php include('server.php'); ?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style(2).css">
</head>
<body>
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
					 <table style = "width: 40%; margin: 30px auto; border-collapse: collapse; text-align: left;">
		<thead>
			<tr style = "border: none; height: 30px; padding: 2px;">
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
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
	<form method="post" action="server.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="save" class="btn">Save</button>
		</div>
		
	</form>
</body>
</html>