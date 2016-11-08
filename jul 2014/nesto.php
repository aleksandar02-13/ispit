<?php
	$otkucano=$_GET['otkucano'];
	$upit='SELECT * FROM korisnici WHERE ime LIKE %$otkucano%';
	$upit='SELECT * FROM korisnici WHERE prezime LIKE %$otkucano%';
	$upit='SELECT * FROM (korisnici k INNER JOIN registracija r ON k.id_korisnik=r.id_korinsik) INNER JOIN vozila v ON r.id_vozilo=v.id_vozilo WHERE v.reg_broj LIKE %$otkucano%';
	
?>

	<select>
		<?php
			while($red=mysql_fetch_array($rez))
			{
				echo "<option value='".$red['id_korisnik']."'>"$red["ime"]." ".$red['prezime']."</option>";
			}
		?>
	</select>