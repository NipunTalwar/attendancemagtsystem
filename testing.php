<?php
session_start();
$select=$_SESSION['login'];
if(!($select=='login'))
{
header("location: login.php");
}



include('attendanceconnect.php');
$id=$_SESSION['id'];
if(isset($_POST['submit']))
{
// print_r($_POST);
 echo $empname     = $_POST['name'];
 echo $leavetype   = $_POST['options'];
 echo $selectfrom  = $_POST['date1'];
 echo $selectto    = $_POST['date2'];
 echo $hourtaken   = $_POST['hours'];
 echo $reason      = $_POST['comment'];
 
 /*$vacationfrom = $_POST['vacationfrom'];
 $too = $_POST['too'];
 $substitute = $_POST['substitute'];
 $comment = $comment['comment'];*/
 echo $sql = "INSERT INTO empleave(empname,leavetype,selectfrom,selectto,hourtaken,reason,lid) 
  VALUES('$empname','$leavetype','$selectfrom','$selectto','$hourtaken','$reason','$id')";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully";


  //Mail function to admin
require_once "Mail.php";

$from    = 'nipun0903talwar@gmail.com';
$to      = 'nipun0903talwar@gmail.com';
$subject = 'Absence Information';
$body    = "Details regarding absence info of employee ";

$headers = array(
    'From'    => $from,
    'To'      => $to,
    'Subject' => $subject
);
 echo "leave data information";

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'nipun0903talwar@gmail.com',
        'password' => 'sushants1'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

} 

}

  /*
  //print_r($_POST); 

    // define variables and set to empty values
    $empnameErr = $leavetypeErr = $selectfromErr = $selecttoErr = $hourtakenErr = $reasonErr =  "";
    $empname = $leavetype = $selectfrom = $selectto = $hourtaken = $reason = "";


     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["empname"])) {
           $empnameErr = "empname is required";
       } else {
                $empname = test_input($_POST["empname"]);
              } 
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$empname)) {
            $empnameErr = "Only letters and white space allowed"; 
                    }
        }
   
         if (empty($_POST["leavetype"])) {
          $leavetypeErr = "leavetype is required";
        } else {
              $leavetype = test_input($_POST["leavetype"]); 
           // check if name only contains letters and whitespace
           // if (!filter_var($dept, FILTER_VALIDATE_EMAIL)) {
           // $deptErr = "Invalid email format";

           if (!preg_match("/^[a-zA-Z ]*$/ ", $leavetype))  {
                  $leavetypeErr = "only letters and whitespaces are allowed" ;
               }
         }
     
      if (empty($_POST["selectfrom"])) {
                $selectfromErr = "date is required";
        }     
           else {
             $selectfrom = test_input($_POST["selectfrom"]);
       // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      /* if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $vacationfromErr = "Invalid URL"; 
      }
     }
      if (empty($_POST["selectto"])) {
           $selecttoErr = "date is required";
      }    
      else {
         $selectto = test_input($_POST["selectto"]);
           }
  
     if (empty($_POST["hourtaken"])) {
           $hourtakenErr = "it is required";
      }   else   {
       $hourtaken = test_input($_POST["hourtaken"]);
                 }


    
     if (empty($_POST["reason"])) {
           $reasonErr = "reason is required";
      }    else {
                $reason = test_input($_POST["reason"]);
             }

   


  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  } 


*/
?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src = "http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src = "http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="attendances.css">
  
  <h1> <center> Attendance Management System </center> </h1>

</head>
<body>






<script type = "text/javascript">

$(document).ready(function () {
    
var select=function(dateStr) {

	
      var d1 = $('#date1').datepicker('getDate');
      var d2 = $('#date2').datepicker('getDate');
      var diff = 0;
      if (d1 && d2) {
            diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
          var total= diff * 8;

      }
  var abscence = total;
$('#calcula').val(abscence);


       $('#calculated').val(diff);

}



$("#date1").datepicker({ 
    //minDate: new Date(2012, 7 - 1, 8), 
    //maxDate: new Date(2012, 7 - 1, 28),
    onSelect: select
});
$('#date2').datepicker({onSelect: select});
});


</script>

  <form name="myform" method = "POST" action="" >
  <ul>
   <li>

  <label>Employee Name    </label>   : <input  type  =  "text" name="name" required > </li>  <br>
 <li> <label>leave type       </label>   : <select name  =  "options">
                                         <option value =  "dynamic leave"> dynamic leave </option>
                                         </select>  </li> 

                                         <br>
    

     
    
     <!--   <label> Email Id        </label>   : <input type="text" name ="email" >           <br> -->

       <li> <label>Select from date </label>   : <input type="text" name="date1"           id = "date1"  class="datepicker" required> </li> <br>
        <li><label>Select to date   </label>   : <input type="text" name="date2"           id = "date2"  class="datepicker"  required> </li> <br>   
        <li><label>Hours Taken      </label>   : <input type="text" name="hours"   value="" id = "calcula" > </li> <br> 
       <li> <label>Reason for leave </label>   : <textarea rows="4" name="comment" cols="50" required> </textarea> </li>    <br>                          


<!--    <label>Select from date </label>   : <input type="text" name="date1" class="datepicker" >     <br>
        <label>Select to date   </label>   : <input type="text" name="date2" class="datepicker" >     <br> -->

   <li> <input type="submit" name="submit"  value="Submit"> </li>
   <li> <input type="reset"  name="reset"  value="cancel"> </li>

    </ul>



  </form>



<a class="logout" href="logout.php"> logout </a>

</body>
</html>



