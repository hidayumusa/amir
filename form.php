<!DOCTYPE html>

<!-- Fig. 19.14: form.php -->
<!-- Process information sent from form.html. -->
<html>
   <head>
      <meta charset = "utf-8">
      <title>Form Validation</title>
   </head>
<link rel = "stylesheet" href = "layoutstyle.css" type = "text/css">
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
      </style>

<body>
<div id = "wrapper">

<div id = "header">

<h1 class = "special">Your Child Everyday Paradise </h1>
</div>

<div id = "navigation">

<ul>
<li><a href = "home.html"> Home</a></li>
<li><a href = "products.html"> Our Products</a></li>
<li><a href = "contact.html"> Contact Us</a></li>
<li><a href = "register.html"> Register</a></li>
<li><a href = "login.html"> Login</a></li>
</ul>

</div>

<div id = "content-container">
<center>
<p>
   <img src = "home.jpg" width=1500; height=400>

</p>
</center>
<div id = "main">

	<fieldset align="center">
	<legend>Detail</legend>

	<p>Name: <?php print( $_POST["fname"] ). " " . ($_POST["lname"] ); ?>

		<p>Address: <?php print( $_POST["address"] ); ?>


			<p>Street: <?php print( $_POST["street"] );?>

			<p>Postal Code: <?php print( $_POST["code"] );?>


			<p>State: <?php print( $_POST["State"] );?>


				<p>State: <?php print( $_POST["country"] ); ?>

	</fieldset>
	<fieldset align="center">
	<legend>Contact</legend>
		<?php
		if(!preg_match( "/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/",
		$_POST["phone"]))
		{
		print( "<p class='error'>Invalid phone nymber</p>
		<p>A valid phone number must be in the form (555) 555-5555</p>
		<p>Click the Back button, enter a valid phone number and resubmit.</p>
		<p>Thank You.</p>");
		die();
		}
		?>

					<p>Email: <?php print( $_POST["email"] ); ?>
					<p>Phone: <?php print( $_POST["phone"] ); ?>
	</fieldset>




		<center>
		<p>
		<img src="shopping.jpg" width=1000 height=400>
		</p>

		<p>Hi <?php print($_POST["fname"]);?>.Congratulation. Your new account have been successfully created!</p>
		<p>You can now take advantage of the member privileges to enchance your online shopping experience with us</p>
		<p>If you have any question about the operation of this online shop,</p>
		<p>Please email the store owner</p>
		<p>A confirmation has been sent to your provided email address. If you not receive within the hour, please contact us.</p>

     <!---put your code here-->

</div>

</div>

<div id = "side">
<div id = "box">
<h3> Categories</h3>

<p> <a href = "babygear.html"> BABY GEAR</a></p>
<p> <a href = "outdoor.html"> OUTDOOR FUN</a></p>
<p> <a href = "toy.html"> EDUCATIONAL TOYS</a></p>


</div>

<div id = "box">
<h3> Highlight</h3>

<p>

Be our<a href="http://www.facebook.com">Facebook</a>fan today!
</p>
</div>

</div>


<div id = "footer">

Copyright © BabyParadise, 2019

</div>

 </div>
</body>
</html>
