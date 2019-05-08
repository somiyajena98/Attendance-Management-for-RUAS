<?php
//header('content=type: application/json');
$conn=mysqli_connect("localhost","root","12345","attendance");

$course_id = $_GET['course_id_box'];
$section_id = $_GET['section_box'];
$qry=mysqli_query($conn,"select registration_no from student_attendance WHERE 
course_id="."'".$course_id."'" AND section_id="."'".$section_id."'" AND date=curdate()")
or die(mysqli_error()."<hr/>Line:".__LINE__."<br/>$sql");

while($data=mysqli_fetch_array($qry,mysqli_assoc)){
	$json[] =$data();
}
echo json_encode(array($json));
mysqli_free_result($qry);
mysqli_close($conn);
?>
