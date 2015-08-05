<!DOCTYPE html>
<head>
<meta charset="ANSI">
<link rel="stylesheet" type="text/css" href="format.css">

<title>4DIAC</title>
</head>

<body>
<?php include 'header.html';?>

<section class="image">
	<h1 class="cOrange">IEC 61499 Implementation for Distributed <br>Devices of the Next Generation</br></h1>
</section>

<section class="news">
	<!--canvas id="leftNewsArrow" width="80" height="80"/-->
	<!--a href="" class="chevron" id="chevron"/-->
	<a href="">6th 4DIAC <br>Users' Workshop</a>
	<a href="">Visualize with <br>Eclipse SCADA</a>
	<a href="">Tutorial <br>Videos</a>
	<!--canvas id="rightNewsArrow" width="80" height="80"/-->
	<script>
	var c = document.getElementById("leftNewsArrow");
var ctx = c.getContext("2d");
ctx.fillStyle = "#0089d1";
ctx.beginPath();
ctx.moveTo(40,0);
ctx.lineTo(60,0);
ctx.lineTo(40,40);
ctx.lineTo(60,80);
ctx.lineTo(20,80);
ctx.lineTo(0,40);
ctx.lineTo(20,0);
ctx.closePath();
ctx.fill();
	</script>
</section>

<section class="content">
	<a href="en_rte.php">RTE
		<img height="100px" src="img/rte-button.png"/>
		<span>Runtime Environment</span></a>
	<a href="en_ide.php">IDE
		<img height="100px" src="img/ide-button.png"/>
		<span>Development Environment</span></a>
	<a href="en_lib.php">LIB
		<img height="100px" src="img/lib-button.png"/>
		<span>Library</span></a>
	<a href="en_sys.php">SYS
		<img height="100px" src="img/sys-button.png"/>
		<span>Systems</span></a>
</section>

<?php include 'footer.html';?>

</body>

</html> 