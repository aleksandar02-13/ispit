<?php
	if(!isset($_SESSION['uloga']))
	{
		header("location:index.php");
	}
	/*-------------------------------------------------F-JA 1-----------------------------------------------------------------------------*/
	function podmeni1($id_zanr)
	{
		$upit="SELECT * FROM (knjige k INNER JOIN zanr/knjige zk ON k.id_knjige=zr.id_knjige) INNER JOIN zanr z ON zr.id_zanr=z.id_zanr WHERE id_zanr=".$id_zanr;
		$rez=...;
		echo "<ul>";
			while($r....)
			{
				echo "<li><a href='#'>".$red['naziv_knjige']."</a>";
					podmeni2($red['id_knjiga']);
				echo "</li>";
			}
		echo "</ul>"
	}
	/*-------------------------------------------------F-JA 2-----------------------------------------------------------------------------*/
	function podmeni2($id_knjiga)
	{
		$upit="SELECT * FROM (knjige INNER JOIN autor a ON k.id_autor=a.id_autor) INNER JOIN izdavac i ON k.id_izdavac=i.id_izdavac WHERE id_knjiga=".$id_knjiga;
		$rez=...;
		echo "<ul>";
			while($r....)
			{
				echo "<li><a href='#'>".$red['naziv_knjige']."</a></li>";
				echo "<li><a href='#'>".$red['broj_strane']."</a></li>";
				echo "<li><a href='#'>".$red['autor']."</a></li>";
				echo "<li><a href='#'>".$red['izdavac']."</a></li>";
				echo "<li><a href='#'><img src='".$red['slika']."'/></a></li>";
			}
		echo "</ul>"
	}
	
	$upit="SELECT * FROM zanrovi";
	$rez=....;
	echo "<ul id='meni'>";
	while($r=...)
	{
		echo "<li><a href='#'>".$red['ime_zanra']."</a>";
			podmeni1($red['id_zanr']);
		echo "</li>";
	}
	echo "</ul>";
	/*----------------------------------------------POJEDINACNO----------------------------------------------------------------------------*/
	$upit="SELECT * FROM knjige k INNER JOIN status s ON k.id_knjiga=s.id_knjiga";
	$rez=....;
	while($r...)
	{
		echo "<div>
			<img src='".$red['slika']."'/> <span>".$red['stanje']."</span>
			</div>
		";
	}
	/*------------------------------------------------PRETREGA-----------------------------------------------------------------------------*/
		$upit2='SELECT * FROM autori';
		$rez2=....;
	?>
	
	<form action='knjige.php' method='POST'>
		Naslov:<input type='text' name='naslov'/>
		Autor:
		<select name='autor'>
			<option value='0'>Izaberi...</option>
			<?php
				while($red...)
				{
					echo "<option value='".$red['id_autor']."'>".$red['autor']."</option>";
				}
			?>
		</select>
		<input type='submit' name='dugme'/>
	</form>
<?php	
	if(isset($_POST['dugme']) && $_POST['autor']!=0 && $_POST['naslov']!="")
	{
		$autor;
		$naslov;
		$upit3='SELECT * FROM knjige k INNER JOIN autor a ON k.id_autor=a.id_autor WHERE id_autor=$autor AND Naziv LIKE %$naziv%';
		$upit4='SELECT count(*) FROM knjige k INNER JOIN autor a ON k.id_autor=a.id_autor WHERE id_autor=$autor AND Naziv LIKE %$naziv%';
		$rez3=...;
		$rez4=..;
		$red3=mysql_fetch_array($rez3);
		if(mysql_num_rows($rez3)>10)
		{
			$koliko=5;
			if(isset($_GET['skriveno'])) $skriveno=$_GET['skriveno'];
			else $skriveno=0;
			$ukupno=$red4['count(*)'];
			$levo=$sakriveno-$koliko;
			$desno=$sakriveno+$koliko;
			echo "<table border='1px'>";
			if($levo<0)
			{
				echo "<tr><td>Pocetak<td><td><a href='knjige.php?sakriveno=desno'>Naredni</a></td></tr>";
			}
			else if($desno>$ukupno)
			{
				echo "<tr><td><a href='knjige.php?sakriveno=levo'>Prethodni</a><td><td>Kraj</td></tr>";
			}
			else
			{
				echo "<tr><td><a href='knjige.php?sakriveno=levo'>Prethodni</a><td><td><a href='knjige.php?sakriveno=desno'>Naredni</a></td></tr>";
			}
			
			$upit5='SELECT * FROM knjige k INNER JOIN autor a ON k.id_autor=a.id_autor WHERE id_autor=$autor AND Naziv LIIKE %$naziv% LIMIT $koliko OFFSET $sakriveno';
			$rez5=...;
			while($red5...)
			{
				echo "<tr><td>Naslov<td><td>Autor<td><td>Godina izdanja<td><tr>";
			}
			echo "</table>";
		}
		else
		{
			//isto samo bez stranicenja;
		}
	}
?>




	