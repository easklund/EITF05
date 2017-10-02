<?php
include ('connect.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<div class="w3-bar w3-dark-gray">
	<div class="w3-rest w3-container">
		<h1 style= "float: left">Webshop	</h1>
		<h1 style= "float: right" ><input id="search" name="search" type="search"><i class="glyphicon glyphicon-search"></i>	<a href="#">
		</a></h1>
	</div>
</div>


<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
    <li><a href="login.php">Login</a></li>
	 <li><a href="signUp.php">SignUp</a></li>
  <li style="float:right"><a class="glyphicon glyphicon-shopping-cart" href="cart.php"></a></li>
</ul>


<form method="post" >
<?php include ('errors.php');?>
<h2>Register</h2>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" placeholder="username">
</div>
<div class="input-group">
<label>Address</label>
<input type="text" name="address" placeholder="Address">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password_1" placeholder="**********">
</div>
<div class="input-group">
<label>Repeat password</label>
<input type="password" name="password_2" placeholder="**********">
</div>
<div class="input-group">
<button type="submit" name="register" class="btn">Register</button>
</div>
<p>Already a member? <a href="login.php"> Login </a>
</p>
</form>

</div>
</body>
</html>
