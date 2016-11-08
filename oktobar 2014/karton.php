<?php
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga']!='bibliotekar')
	{
		header("location:index.php");
	}
	$upit='SELECT * FROM korinsici';
	$rez...;
	while($red...)
	{
		echo "<a href='karton.php?id=".$red['id_korisnik']."'>".$red['ime']."</a><br/>";
	}
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$upit='SELECT * FROM (korisnik k INNER JOIN zaduzivanje z ON k.id_korisnik=z.id_korisnik) INNER JOIN knjiga g ON z.id_knjiga=g.id_knjiga WHERE z.id_korisnik='.$_GET['id'];
		echo "<table>";
		while($red...)
		{
			if($red['datum_vracanja']!=null)
			{
			echo "<tr>";
				echo "<td>ime</td>";
				echo "<td>knjiga</td>";
				echo "<td>izdavanje</td>";
				echo "<td>vracanje</td>";
			echo "</tr>";
			}
			else
			{
				echo "<tr>";
				echo "<td>ime</td>";
				echo "<td>knjiga</td>";
				echo "<td>izdavanje</td>";//date("d.m.Y",$red['datum_izdavanja']);
				echo "<td>vracanje</td>";
				echo "<td><a href='karton.php?id2=".$red['id_zaduzivanja']."'>Ubaci datum vracanja</a></td>";
			echo "</tr>";
			}
		}
	}
	if(isset($_GET['id2']))
	{	
		$id_zakazivanja=$_GET['id2'];
			<form action='karton.php'>
				echo "<input type='hidden' name='sakriveno' value='".$id_zakazivanje."'/>"
				echo "<input type='text' name='datum'/>";
				echo "<input type='submit' name='dugme2'/>";
			</form>
	}
			if(isset($_POST['dugme2']))
			{
				$datum;
				$id_zakazivanje;
				$upit='UPDATE zaduzenje SET datum_vracanja=$datum WHERE id_zaduzenja='.$id_zakazivanje;
			}
	
	
	
	
?>
	
	
	
	