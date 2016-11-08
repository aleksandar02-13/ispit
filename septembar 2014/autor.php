<?php
	if(!isset($_SESSION['id']))
	{
		header('location:pocetna.php');
	}
	echo "<a href='pocetna.php'>Pocetna</a>";
	$upit='SELECT * FROM funkcije';
	$rez=...;
	while($red...)
	{
		echo "<a onClick='f(".$red['id_funkcija'].")'>".$red['naziv']."</a>";
	}
?>
<body onLoad='zaFokus()'>
	<div id='ispis'>
	</div>
</body>