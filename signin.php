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
	 <li><a href="signin.php">SignIn</a></li>
  <li style="float:right"><a class="glyphicon glyphicon-shopping-cart" href="cart.php"></a></li>
</ul>
<div id="login">
<h3>Signin Form</h3>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Name :</label>
<input id="name" name="name" placeholder="first- and lastname" type="text">
<label>Id-number :</label>
<input id="idNbr" name="id" placeholder="YY-MM-DD-xxxx" type="text">
<label>Address :</label>
<input id="address" name="address" placeholder="addres" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<label>Repeat password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="register" type="submit" value="SignUp">

<span><?php echo $error; ?></span>
</form>
</div>

</body>
</html>