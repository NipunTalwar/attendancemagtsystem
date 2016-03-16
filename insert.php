<?php 
//if(isset($_POST['submit'])){
/*if(!empty($_POST)): print_r($_POST); die;
  endif;*/
  $servername = "localhost";
  $username   = "root";
  $password   = "webf123";
  $dbname     = "absence";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
  }  

// print_r($_POST);
 echo $name = $_POST['name'];
 echo $dept = $_POST['department'];
 echo $vacationfrom = $_POST['vacationfrom'];
 echo $too = $_POST['too'];
 echo $substitute = $_POST['options'];
 echo $comment   = $_POST['comment'];
 
 /*$vacationfrom = $_POST['vacationfrom'];
 $too = $_POST['too'];
 $substitute = $_POST['substitute'];
 $comment = $comment['comment'];*/
 $sql = "INSERT INTO leaves (name,dept,vacationfrom,too,substitute,comment) 
   VALUES ( \"$name\",\"$dept\",\"$vacationfrom\",\"$too\",\"$substitute\",\"$comment\")";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

//}

?>