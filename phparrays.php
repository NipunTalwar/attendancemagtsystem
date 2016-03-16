<!doctype> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$cars = array 
     (
        array("volvo",20,15),
        array("bmw",10,8),
        array("landrover",20,15),
        array("maruti" ,20,15)
      );
  echo $cars[0][0].": IN stock " .$cars[0][1]." , sold " .$cars[0][2]." <br> "; 
  echo $cars[1][0].": IN stock " .$cars[1][1]." , sold " .$cars[1][2]." <br> ";
  echo $cars[2][0].": IN stock " .$cars[2][1]." , sold " .$cars[2][2]." <br> ";
  echo $cars[3][0].": IN stock " .$cars[3][1]." , sold " .$cars[3][2]." <br> ";
   
?>


</body>
</html>