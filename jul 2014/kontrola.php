<?php
	@session_start();
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga']!='kontroler')
	{
		header("location:index.php");
	}
	$upit='SELECT * FROM pol_uprava';
	$rez=mysql_query($upit);
?>
	<form action='kontrola.php' method='POST'>
		Policijska uprava:
		<select name='uprava'>
			<?php
				while($red=mysql_fetch_array($rez))
				{
					echo "<option value='".$red['id_uprava']."'>".$red['grad']."</option>";
				}
			?>
		</select>
		Registracijski broj:<input type='text' name='broj'/>
		Datum:<input type='text' name='broj'/>
		<input type='submit' name='dugme'/>
	</form>
<?php
	if(isset($_POST['dugme']))
	{
		$uprava;
		$broj;
		$datum;
		$marker=0;
		if($uprava!=0)
		{
			if($marker=0)
			{
				$uuprava="id_uprava=".$uprava;
				$marker++;
			}
			else
			{
				$uuprava=" AND id_uprava=".$uprava;
			}
		}
		if($broj!="")
		{
			if($marker=0)
			{
				$bbroj="reg_broj=".$broj;
				$marker++;
			}
			else
			{
				$bbroj=" AND reg_broj LIKE %".$uprava."%";
			}
		}
		if($datum!="")
		{
			if($marker=0)
			{
				$ddatum="datum=".$datum;
				$marker++;
			}
			else
			{
				$ddatum=" AND datum LIKE %".$datum."%";
			}
		}
		$sve=$uuprava.$bbroj.$ddatum;
		$upit="SELECT * FROM registracija r,korinsici k,vozila v,uprava u 
		WHERE r.id_korisnik=k.id_korisnik AND r.id_vozilo=v.id_vozilo AND r.id_uprava=u.id_uprava AND $sve";
		$ukupno="SELECT count(*) FROM registracija r,korinsici k,vozila v,uprava u 
		WHERE r.id_korisnik=k.id_korisnik AND r.id_vozilo=v.id_vozilo AND r.id_uprava=u.id_uprava AND $sve";
		$rez=mysql_query($upit);
		if(mysql_num_rows($rez)>10)
		{
			$koliko=5;
			if(isset($_GET['skriveno'])) $skriveno=$_GET['skriveno'];
			else $skriveno=0;
			$levo=$skriveno-$koliko;
			$desno=$skriveno+$koliko;
			echo "<table>";
			if($levo<0)
			{
				echo "<tr><td>Pocetak</td><td><a href='kontrola.php?skriveno=desno'>Naredni</a></td></tr>";
			}
			else if($desno>$ukupno)
			{
				echo "<tr><td><a href='kontrola.php?skriveno=levo'>Prethodni</a></td><td>Kraj</td></tr>";
			}
			else
			{
				echo "<tr><td><a href='kontrola.php?skriveno=levo'>Prethodni</a></td><td><a href='kontrola.php?skriveno=desno'>Naredni</a></td></tr>";
			}
			$upit3="SELECT * FROM registracija r,korinsici k,vozila v,uprava u 
			WHERE r.id_korisnik=k.id_korisnik AND r.id_vozilo=v.id_vozilo AND r.id_uprava=u.id_uprava AND $sve LIMIT $koliko OFFSET $skriveno";
			while($red3=mysql_fetch_array($rez))
			{
				echo "<tr>";
					echo ......
				echo "</tr>";
			}
		}
		else
		{
			//isto samo bez stranicenja!
		}
	}
?>











