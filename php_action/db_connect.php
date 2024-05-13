<?php 	

$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "store";
$store_url = "https://php-inventory-management-system-nlf4zgi4z.vercel.app/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
