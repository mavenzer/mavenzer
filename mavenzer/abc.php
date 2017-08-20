<!doctype html>
<html>
<head>
<title>Untitled document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<div id="getdata"></div>

<script type="text/javascript">
function dis() 
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","select.php",false);
	xmlhttp.send(null);
	document.getElementById("getdata").innerHTML=xmlhttp.responseText;
}
dis();

setInterval(function(){
	dis()
},1000);
</script>


</body>
</html>
