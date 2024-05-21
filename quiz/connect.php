<?php
$servername = "localhost:3306";
$username = "root";
$password = "@1BoiledPotato";
$dbname = "quiz_db";

$conn = mysqli_connect($servername,$username,$password,$dbname); 

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>