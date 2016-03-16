<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("jai.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("jai.txt"));
fclose($myfile);
?>

</body>
</html>
