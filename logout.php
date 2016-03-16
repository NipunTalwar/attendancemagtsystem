<?php
// remove all session variables
session_start();
session_unset(); 

// destroy the session 
session_destroy(); 
header("location: login.php");
//echo 'You are logged out please log in to continue ';




?>







<!--//<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

// <script type="text/javascript">
// 	jQuery(document).ready(function($){
// 		$('body a.logout').on('click',function(){
// 			console.log('click');
// 			alert("You are logged out please log in to continue ");
// 			<?php //header("location: login.php"); ?>
// 		});
// 	});
	
</script> -->
