<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["firstname"])) {
           $firstnameerr = "first Name is required";
       } else {
                $name = test_input($_POST["firstname"]);
              } 

        if(empty($_POST["lastname"])) {
           $lastnameerr = " last name is required ";
           } else {
                 $lastname = test_input($_POST["lastname"]);      
           }           

         if(empty($_POST["email"])){
            $emailerr = " email is required"; 
         }  else {
                 $email = test_input($_POST["email"]);        
           }
         if(empty($_POST["password"])){
           $passworderr = "password is required";
         }  else {
                 $password = test_input($_POST["password"]);
           }

        }      




?>







<!-- Sign up form   -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>

   <h1>  <center>  Create Account  </center>  </h1>

   

</head>
<body>
 <form   name= "signupform"  method = "GET" >
  
   <label>First Name</label> : <input type = "text"  name = "firstname">  <br>

   <label>Last Name</label>  : <input type = "text"  name = "lastname">   <br>
   <label>Email  </label>    : <input type = "text"  name = "email">      <br>
   <label>Password</label>   : <input type = "text"  name = "password">   <br>

   <input type = "submit"  name = "submit" value = "submit">
  





 </form>




    
</body>
</html>