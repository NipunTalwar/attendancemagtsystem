<?php

include('attendanceconnect.php');
if(isset($_POST['submit']))
{

$emailid  = $_POST['email'];
echo $password = $_POST['password'];
echo $confirmpassword = $_POST['confirmpassword'];
$usertype = $_POST['options'];

if($password==$confirmpassword)
{
 echo $sql = "INSERT INTO signin(emailid,password,usertype) 
  VALUES('$emailid','$password','$usertype')";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully";

}
   
   }
   else
   {
   	echo "pass not match";
   }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>  </title>

	<h2> <center>  Assign Email & Password to new user's  </center>  </h2>



</head>
<body>
  
<form id="myform1" name="myform1" method = "POST" action="" >

    <ul>

  <li><label> Email Id </label> : <input type ="text"       name ="email"    placeholder = "email id" required> </li> <br>
    
  <li><label> Password </label> : <input type ="password"   name ="password" id="password"  placeholder = "password" required></li> <br>
  <li><label>Confirm Password</label> : <input type ="confirmpassword" name ="confirmpassword" id="confirmpassword" placeholder = "confirm password" required ></li> <br>
  <li><label>Type of User   </label>  : <select name  =  "options">
                                         <option value ="1">  ADMIN </option>
                                         <option value ="2 "> USER  </option>
                                         </select> <br> </li>

  <li><input type = "submit" name = "submit" value = "submit"> </li>

    </ul>

</body>
</html> 

