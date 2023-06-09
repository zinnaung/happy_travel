<!-- PHP Connected To Database -->
<?php
$servername = "tsb.well-field.co.jp";
$username = "tsb";
$password = "tsb202104";
$dbname = "tsbsystem";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
