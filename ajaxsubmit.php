<?php
	include('attendanceconnect.php');

	print_r($_POST);

	echo $approve     = $_POST['options'];
	echo $comment     = $_POST['comment'];
	echo $id          = $_POST['id'];


 /*echo $sql = "UPDATE empleave(approve,comment) 
  VALUES('$approve','$comment')";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully"; 
       
       } */


$sql = "UPDATE empleave SET approve='$approve' ,comment='$comment'  WHERE id='$id' ";
$sql = mysql_query($sql);

if($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record:" . $conn->error;
}

$conn->close();


?>
