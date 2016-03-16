<?php
include('attendanceconnect.php');
$select=$_SESSION['admin'];
if(($select=='admin'))
{
header("location: login.php");
}


$sql = "SELECT id, emailid FROM signin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
       <a href = "demo.php?a=<?php echo  $row["id"] ;?>"><?php echo  $row["id"] ;?> </a>
       <?php
       echo  $row["emailid"];
    }
} else {
    echo "0 results";
}
$conn->close();




?>







