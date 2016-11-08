<?php
	@session_start();
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga']!='stomatolog')
	{
		header("location:index.php");
	}
?>
	<table border='1px'>
		<?php
			$upit="SELECT * FROM (termini t INNER JOIN zakazano z ON t.id_termin=z.id_termin) INNER JOIN pacijent p ON p.id_pacijent=z.id_pacijent WHERE id_stomatolog=".$_SESSION['stomatolog'];
			$rez=mysql_query($upit);
			while($red=mysql_fetch_array($rez))
			{
				if(date("d",$red['datum'])==date("d"))
				{
					echo "<tr>";
						echo "<td>".$red['Ime']." ".$red['Prezime']."</td>";
						echo "<td><a href='obavljeni_poslovi.php?id=".$red['id_zakazivanje']."'>".$red['termin']."</a></td>";
					echo "</tr>";
				}
			}
		?>
	</table>
	<?php
		if(isset($_GET['id']))
		{
			echo "<form action='..' method=...>"
				echo "<input type='text' name='opis'/>";
				echo "<input type='text' name='cena'/>";
				echo "<input type='hidden' name='sakriveno' value='".$_GET['id']."'/>";
				echo "<input type='submit' name='upisi'/>";
			echo "</form>";
		}
		if(isset($_POST['upisi']))
		{
			$opis;
			$cena;
			$id_zakazano=$_POST['sakriveno'];
			$upit="UPDATE zakazano set opis='$opis',cena=$cena WHERE id_zakazano=$id_zakazano";
			$rez=mysql_query($upit);
		}
	?>
	
	
	
	
	
	
	
	