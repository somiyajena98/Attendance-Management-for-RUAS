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
$sql = "delete from student_attendance 
WHERE registration_no="."'".$selection."'"." AND date=curdate()";
$result = $conn->query($sql);
if ($result) {
    echo "delete ok";
} else {
    echo "delete Error";
}
$conn->close();
?>
