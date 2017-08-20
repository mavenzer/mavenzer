<!doctype html>
<html>
<head>
</head>
<body>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"blood");
$res=mysqli_query($link,"select * from blood");
while($row=mysqli_fetch_array($res))
{
	echo $row["cu2"];
	
}
?>

</body>
</html>