    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alardawi_furniture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>