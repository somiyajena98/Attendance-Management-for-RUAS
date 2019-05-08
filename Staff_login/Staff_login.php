<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "attendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_id = $_GET['user_id_box'];
$password2 = $_GET['password_box'];
$sql = "select staff_id from staff where staff_id="."'".$user_id."'"." and passwordst="."'".$password2."'";
$result = $conn->query($sql);
if ($result) {
  echo "login ok";
} else {
    echo "error";
}
$conn->close();
?>
