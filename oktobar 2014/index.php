<div id='najnovije'>
	<?php
		$upit='SELECT * FROM knjige ORDER BY godina DESC LIMIT 3';
		$rez=mysql_query($upit);
		while($red=...)
		{
			echo "<img src='".$red['slika']."'/>";
		}
	?>
</div>
<div id='najcitanije'>
	<?php
		$upit='SELECT * FROM stanje s INNER JOIN knjige k ON s.id_knjiga=k.id_knjiga ORDER BY br_zaduzivanja DESC LIMIT 3';
		$rez=mysql_query($upit);
		while($red=...)
		{
			echo "<img src='".$red['slika']."'/>";
		}
	?>
</div>
	<a href='logovanje.php'>Logovanje</a>&nbsp;
	<a href='registracija.php'>Registracija</a>