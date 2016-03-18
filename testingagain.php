<?php
include('attendanceconnect.php');


 $sel = "SELECT empname FROM empleave WHERE lid = 6";
$result = $conn->query($sel);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "welcome: " . $row["empname"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



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
  $sql = "INSERT INTO empleave(empname,leavetype,selectfrom,selectto,hourtaken,reason,lid) 
  VALUES('$empname','$leavetype','$selectfrom','$selectto','$hourtaken','$reason','$id')";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully";


  

} 

}
?>



























<!DOCTYPE html>
<html>
<head>


	<title></title>

  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src = "http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src = "http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<?php
include('header.php');
?>
</head>




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


 




<div class="allcp-form theme-info tab-pane mw600" id="contact" role="tabpanel">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title"> <center>   Leave Application Form  </center>   </span>
                                </div>
                                <!-- -------------- /Panel Heading -------------- -->

                                <form method="post" action="/" id="form-contact1">
                                    <div class="panel-body pn">
                                        <div class="section">
                                            <label for="names" class="field prepend-icon">
                                                <input type="text" name="names" id="names" class="gui-input"
                                                       placeholder=" Employee Name">
                                                <label for="names" class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- -------------- /section -------------- -->

                                       

                                       <div class="section">
                                         <label class="field select">
                                           <select id="location" name="location">
                                             <option value="">Select leave type..</option>
                                               <option value="AL">Dynamic Leave</option>
                                                 </select>
                                                   <i class="arrow double"></i>
                                                     </label>
                                                        </div>
              
 <div class="section">


    <label for ="date1" class="field prepend-icon"> 
    <input type="text" name="date1" id = "date1"  class="datepicker" placeholder="starting date for leave" required> </li> <br>
        <label for="date1" class="field-icon">
          <i class="fa fa-user"></i>
          </label>
          </label>
          </div>



 <div class="section">
   <label for="date2" class="field prepend-icon"> 
   <input type="text" name="date2" id = "date2"  class="datepicker" placeholder="end date for leave" required> </li> <br>   
      <label for="date2" class="field-icon" >
        <i class="fa fa-user"></i>
        </label>
        </label>
        </div>



<div class="section">      
   <label for="hours" class="field prepend-icon">  
   <input type="text" name="hours"   value="" id = "calcula" placeholder="Total Hour's"> </li> <br> 
     <label for="hours" class="field-icon" >
     <i class="fa fa-user "></i>
     </label>
     </label>
     </div>







                                        <div class="section">
                                            <label for="comment" class="field prepend-icon">
                          <textarea class="gui-textarea" id="comment" name="comment"
                                    placeholder="Reason for leave"></textarea>
                                                <label for="comment" class="field-icon">
                                                    <i class="fa fa-align-justify"></i>
                                                </label>
                                            </label>
                                        </div>
                                        

                                    </div>
                                    <!-- -------------- /Form -------------- -->
                                    <div class="section text-right">
                                        <button type="submit" name="submit" class="btn btn-primary btn-bordered ph40">Send</button>
                                    </div>
                                </form>
                            </div>
                            <!-- -------------- /Panel -------------- -->
                        </div>
                        <!-- -------------- /Contact Form -------------- -->
   <?php
 include('footer.php');
?>

<a class="logout" href="logout.php"> logout </a>






