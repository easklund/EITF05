<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

DEFINE ('user', 'root');
DEFINE ('password', 'root');
DEFINE ('host', 'localhost');
DEFINE ('database', 'db');

$conn = mysqli_connect(host, user, password, database);

if (!$conn) {
  die('errror connection tp databse.')
}
echo 'We are connected';


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['submit'])){
echo hejhej;


}

//if the register button is clicked
if(isset($_POST['register'])){

   $username=$_POST['username'];
   $address=($_POST['address']);
   $password_1=($_POST['password_1']);
   $password_2=($_POST['password_2']);

}

echo "HEJ".$username;
  $password=md5($password_1); //encrypt password
  $sql="INSERT INTO Users(userName, address, hash)
      VALUES ('$username', '$address', '$password')";
  $conn->query($sql);
  echo $conn->lastErrorMsg();




?>
