<?php
//header('content=type: application/json');
$conn=mysqli_connect("localhost","root","12345","attendance");

$register = $_GET['register_box'];

$qry=mysqli_query($conn,"select course_id, Count(course_id) As Course_Classes from
 student_attendance GROUPBY course_id ORDERBY Count_Cass DESC WHERE registration_no="."'".$register."'")
 or die(mysqli_error()."<hr/>Line:".__LINE__."<br/>$sql");
while($data=mysqli_fetch_array($qry,mysqli_assoc)){
	$json[] =$data();
}
echo json_encode(array($json));
mysqli_free_result($qry);
mysqli_close($conn);
?>
