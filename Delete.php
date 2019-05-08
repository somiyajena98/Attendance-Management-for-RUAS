<?php
//header('content=type: application/json');
$conn=mysqli_connect("localhost","root","12345","attendance");

$selection = $_GET['select_student'];
$qry=mysqli_query($conn,"delete from student_attendance 
WHERE registration_no="."'".$selection."'"." AND date=curdate()")
or die(mysqli_error()."<hr/>Line:".__LINE__."<br/>$sql");

while($data=mysqli_fetch_array($qry,mysqli_assoc)){
	$json[] =$data();
}
echo json_encode(array($json));
mysqli_free_result($qry);
mysqli_close($conn);
?>
