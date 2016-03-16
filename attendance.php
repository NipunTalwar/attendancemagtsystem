<?php


/*if(isset($_POST['submit']))
{*/
$date1 = StrToTime ( $_POST['date1'] );
$date2 = StrToTime ( $_POST['date2'] );
$diff  = $date2 - $date1;
$hours = $diff / (86400); 
$hours ;
$sum = 0;
for($i=0; $i<=$hours; $i++)
{
		$value= 8;
		//echo "8" ;
		$sum = $sum + $value;
}
	echo $sum;

//}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src = "http://code.jquery.com/jquery-1.10.2.js"      ></script>
  <script src = "http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <h1> <center> Attendance Management System </center> </h1>

</head>
<body>

    <script type="text/javascript">
  $(function() {
    $( ".datepicker" ).datepicker( {minDate: '0', dateFormat: 'yy-mm-dd' } );
  });
   </script>

  <!-- <script type="text/javascript">
     $("#add_it").click(function() {
  subtraction = parseFloat( $('#date1').val() )   -    parseFloat( $('#date2').val() );  
  $('#hours').val(subtraction); 
  
 });

  </script>  -->
    
    

    <form  name="myform" method="POST" > 

    
     <label>Employee Name    </label>   : <input  type  =  "text" name="name" ><br>
     <label>leave type       </label>   : <select name  =  "options">
                                         <option value =  "dynamic leave"> dynamic leave </option>
                                         </select> 

                                         <br>
    

     <!--   <label>Select from date    </label>   : <input type="text" name="date1" class="datepicker" >     <br>
            <label>Select to   date    </label>   : <input type="text" name="date2" class="datepicker" >     <br>                                        
       

        <label> Hours Taken     </label>   : <input type="text" name ="hours" > <br> -->
    
        <label> Email Id        </label>   : <input type="text" name ="email" >           <br>

        <label>Select from date </label>   : <input type="text" name="date1"   class="datepicker" >          <br>
        <label>Select to date   </label>   : <input type="text" name="date2"   class="datepicker" >          <br>   
        <label>Hours Taken      </label>   : <input type="text" name ="hours"  value="<?php echo $sum; ?>">  <br> 
        <label>Reason for leave </label>   : <textarea rows="4" name="comment" cols="50"> </textarea> <br>                          


<!--    <label>Select from date </label>   : <input type="text" name="date1" class="datepicker" >     <br>
        <label>Select to date   </label>   : <input type="text" name="date2" class="datepicker" >     <br> -->

    <input type="submit" name="submit"  value="Submit">
    <input type="reset"  name="cancel"  value="cancel">

    
</form>
</body>
</html>


