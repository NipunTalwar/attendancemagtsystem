<?php
$servername = 'localhost';
$username   = 'root';
$password   = 'webf123';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($conn){
echo "Connected successfully";
}?>
