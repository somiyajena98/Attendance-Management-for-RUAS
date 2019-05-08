<?php
//header('content=type: application/json');
$conn=mysqli_connect("localhost","root","12345","attendance");

$staff_id = $_GET['staff_id'];
$qry=mysqli_query($conn,"select course_id from lecture where staff_id="."'".$staff_id."'")
or die(mysqli_error()."<hr/>Line:".__LINE__."<br/>$sql");

while($data=mysqli_fetch_array($qry,mysqli_assoc)){
	$json[] =$data();
}
echo json_encode(array($json));
mysqli_free_result($qry);
mysqli_close($conn);
?>
