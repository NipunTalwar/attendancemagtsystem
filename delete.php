  //basic crud operations

<?php
$servername = "localhost";
$username   = "root";
$password   = "webf123";
$dbname     = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   // sql select statement.
$sql = "SELECT name, class FROM studentdetail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "  Name: " . $row["name"]. " class :  " . $row["class"]. "<br>";
    }
} else {
    echo "0 results";
}


   // sql to delete a record
$sql = "DELETE FROM studentdetail WHERE name = 'nipun'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
   

  // sql to UPDATE a record

$sql = "UPDATE studentdetail SET class = 'phd' where name = 'satya'";

if ($conn -> query($sql) === TRUE){
  echo "RECORD updated successfully";
} else {
     echo "error updating record: " .$conn->error;
}

  // sql to insert a record

$sql = "INSERT INTO studentdetail(name,class)
VALUES('nitin','bcom'),('nikhil','phd'),('shubham','mca')";

if ($conn -> query($sql) === TRUE){
  echo "RECORD INSERTED SUCCESSFULLY  ";
} else {
     echo "error inserting record : " .$conn ->error;
}



$conn->close();
?>
