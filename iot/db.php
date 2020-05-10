<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kwh";

$locate = $_GET['locate'];
$voltage = $_GET['voltage'];
$freq = $_GET['freq'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "success db";
}


$sql = "INSERT INTO  powermeter (locate, voltage, freq)
VALUES ($locate, $voltage, $freq)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>