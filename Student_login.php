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
$password1 = $_GET['password_box'];
$sql = "select registration_no from student where registration_no="."'".$user_id."'"." and passwords="."'".$password1."'";
$result = $conn->query($sql);
if ($result) {
    echo "login ok";
} else {
    echo "Login Error";
}
$conn->close();
?>

