<html>
<head><title>Dummy Page</title></head>
<body>

<?php
$myfile = fopen("robot.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("robot.txt"));
fclose($myfile);
?>

Hey;
</body>
</html>