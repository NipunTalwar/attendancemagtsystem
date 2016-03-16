<?php

session_start();
ob_start();

$select=$_SESSION['login'];
if(($select=='login'))
{
header("location: testing.php");
}

elseif(($select=='admin'))
{
header("location: showdata.php");
}
else
{
  

include('attendanceconnect.php');


if(isset($_POST['submit']))
{

$emailid  = $_POST['email'];
$password = $_POST['password'];

 $sqlD = "select * from signin where emailid='$emailid' and password='$password'";
     $res  = mysqli_query($conn,$sqlD);


while($row=mysqli_fetch_assoc($res))
{
	
	$id=$row['id'];
	$_SESSION['id']=$id;
	$email=$row['emailid'];
	$_SESSION['login']='login';

    
    
 echo $usertype = $row['usertype'];
    
     if($usertype=='2')
     {

    header("Location: testing.php");
     }
    else if($usertype=='1')
    {

    	header("Location: showdata.php");
         $_SESSION['admin']='admin';
   }
   else
   {
      header("Location: login.php");
   }

}
}
?>






<!DOCTYPE html>
<html>
<head>
	<title>  </title>

	<h1> <center>  Sign In  </center>  </h1>

</head>
<body>
  
<form name="myform1" method = "POST" action="" >

    <label> Email Id </label> : <input type ="text"       name ="email"    placeholder = "valid email id"       required > <br>
    <label> Password </label> : <input type ="password"   name ="password" placeholder = "enter valid password" required > <br>
    <input type = "submit" name = "submit" value = "submit">

</body>
</html>
<?php
}
?>