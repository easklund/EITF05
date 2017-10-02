<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet" type="text/css">

<?php
session_start();
include_once('connect.php');
?>


<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
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
<h2>Dessa skor kan du välja mellan:</h2>

<?php
$sql = "SELECT * FROM Items";
$res = mysqli_query($conn, $sql);
echo "Begin While";
   while($row = mysqli_fetch_assoc($res)){
echo "inside while";
        echo $row['itemName']."<br/>";
        echo $row['price']."<br/>";
    }
echo "empty";

?>


<table>
  <tr>
    <th>Shoe</th>
    <th>Price</th>
	<th></th>
	<th></th>
  </tr>
  <tr>
    <td>Converse</td>
    <td>$100</td>
	<td><a  href="converse.jpeg">
    <img src="converse.jpeg" width="150" height="100">
  </a></td>
  <td><input type="button" class="button" value="Lägg i varukorg"></td>

  </tr>
  <tr>
    <td>Finskor</td>
    <td>$150</td>
   <td><a  href="leatherboat.jpeg">
    <img src="leatherboat.jpeg" width="150" height="100">
  </a></td>
  <td><input type="button" class="button" value="Lägg i varukorg"></td>
  </tr>
  <tr>
    <td>Gymnastikskor</td>
    <td>$300</td>
	<td><a  href="gymnastics.jpeg">
    <img src="gymnastics.jpeg" width="150" height="100">
  </a></td>
	<td><input type="button" class="button" value="Lägg i varukorg"></td>

</tr>
  <tr>
    <td>Högklackat</td>
    <td>$250</td>
	<td><a  href="HighHeels.jpeg">
    <img src="HighHeels.jpeg" width="150" height="100">
  </a></td>
	<td><input type="button" class="button" value="Lägg i varukorg"></td>
  </tr>
</table>

</body>
</html>
