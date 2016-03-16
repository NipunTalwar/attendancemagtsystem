<?php
    //print_r($_POST); 

    // define variables and set to empty values
    $nameErr = $deptErr = $vacationfromErr = $toErr = $substituteErr = $commentErr =  "";
    $name = $dept = $vacationfrom = $to = $substitute = $comment = "";


     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["name"])) {
           $nameErr = "Name is required";
       } else {
                $name = test_input($_POST["name"]);
              } 
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
                    }
        }
   
         if (empty($_POST["dept"])) {
          $deptErr = "Email is required";
        } else {
              $dept = test_input($_POST["dept"]); 
           // check if name only contains letters and whitespace
           // if (!filter_var($dept, FILTER_VALIDATE_EMAIL)) {
           // $deptErr = "Invalid email format";

           if (!preg_match("/^[a-zA-Z ]*$/ ", $dept))  {
                  $deptErr = "only letters and whitespaces are allowed" ;
               }
         }
     
      if (empty($_POST["vacationfrom"])) {
                $vacationfromErr = "date is required";
        }     
           else {
             $vacationfrom = test_input($_POST["vacationfrom"]);
       // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      /* if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $vacationfromErr = "Invalid URL"; 
      }*/
     }
      if (empty($_POST["too"])) {
           $toErr = "date is required";
      }    
      else {
         $to = test_input($_POST["vacationfrom"]);
           }
  
     if (empty($_POST["substitute"])) {
           $substituteErr = "it is required";
      }   else   {
       $substitute = test_input($_POST["substitute"]);
                 }


    
     if (empty($_POST["comment"])) {
           $commentErr = "comment is required";
      }    else {
                $comment = test_input($_POST["comment"]);
             }

   


  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

     // CRUD operations

  // $servername = "localhost";
  // $username   = "root";
  // $password   = "webf123";
  // $dbname     = "absence";


  // // Create connection
  // $conn = new mysqli($servername, $username, $password, $dbname);
  // // Check connection
  // if ($conn->connect_error) {
  //   die("Connection failed:" . $conn->connect_error);
  // }  
  
  // //echo $sql = "INSERT INTO leave ( name,dept,vacationfrom,to,substitute,comment ) VALUES ('','','','','','') ";

  
//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

//$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="form1.css">
  	<title>  


    <!--<h5>   Employee Details   </h5> -->
    

	</title>

    <h1>  <center>  Attendance Management System </center>   </h1> 
</head>
<body>
 <!-- <script>
  $(function() {
    $( ".datepicker" ).datepicker();
     
  });
  
  </script> -->

<script type="text/javascript">
  $(function() {
    $( ".datepicker" ).datepicker( {minDate: '0', dateFormat: 'yy-mm-dd' } );
  });
</script>



   <form  name="myform" method="POST" action="insert.php">  

   <label>Name</label> : <input type="text" name="name" >        <br>
   <label>Department</label> : <input type="text" name="department">   <br>
   <label>Vacation from</label>   : <input type="text" name="vacationfrom" class="datepicker" >   <br>
            <label>too</label>    : <input type="text" name="too" class="datepicker" >   <br>
   <label> who will be your substitute during your absence : </label> 
   <select name="options">
     <option value = "Director"> Director    </option> <br>
     <option value = "By Myself"> By Myself  </option> <br>
   </select><br>

  <label>Comment :</label>
  
   <textarea rows="4"   name="comment" cols="50"> </textarea> <br>
   <input type="submit" name="submit"  value="Submit"> <br>
   <input type="reset"  name="cancel"  value="cancel">
   </form>
  






</body>
</html>
