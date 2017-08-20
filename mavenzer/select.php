
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mavan");
$res=mysqli_query($link,"select * from mavanger");
while($row=mysqli_fetch_array($res))
{
	echo $row["heart1"]."     ".$row["heart2"]."     ".$row["heart3"];
	echo "<br/>";
}
?>
