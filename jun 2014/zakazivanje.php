<?php
	@session_start();
	if(!isset($_SESSION['uloga']))
	{
		header("location:index.php");
	}
?>
	<form action='zakazivanje' method='POST'>
		<input type='text' name='dan'/>
		<input type='text' name='mesec'/>
		<input type='text' name='godina'/>
		<input type='submit' name='unesi'/>
	</form>
	<?php
		if(isset($_POST['unesi']))
		{
			$dan=$_POST['dan'];
			$mesec=$_POST['mesec'];
			$godina=$_POST['godina'];
			
			$datum=mktime(0,0,0,$mesec,$dan,$godina);
			$vikend=date("D",$datum);
			
			
			$upit="SELECT * FROM termini WHERE id_termin NOT IN (SELECT id_termin FROM zakazano WHERE datum='$datum')";//slobodno
			$upit2="SELECT * FROM termini t INNER JOIN zakazano z ON t.id_termin=z.id_termin WHERE z.datum='$datum'";//zauzeto
			
			$rez=mysql_query($upit);
			$rez2=mysql_query($upit2);
			if($vikend=="Sat" || $vikend=="Sun")
			{
				echo "Ne radi se vikendom";
			}
			echo "<table border='1px'>";
			while($red=mysql_fetch_array($rez))
			{
					echo "<tr>";
						echo "<td>".$red['termin']."</td>";
						echo "<td><a href='zakazivanje.php?id=".$red['id_termin']."&datum=$datum'>Slobodno</a></td>";
					echo "</tr>";
			}
			while($red2=mysql_fetch_array($rez2))
			{
				if($red['pacijent']==$_SESSION['id'])
				{
					echo "<tr>";
						echo "<td>".$red['termin']."</td>";
						echo "<td><a href='zakazivanje.php?id=".$red['id_termin']."&datum=$datum'>Otkazi</a></td>";
					echo "</tr>";
				}
				else
				{
					echo "<tr>";
						echo "<td>".$red['termin']."</td>";
						echo "<td>Zauzeto</td>";
					echo "</tr>";
				}
			}
			echo "</table>";
		}
		if(isset($_GET['id']))
		{
			echo "<form action='zakazivanje.php' method='POST'>";
				$upit='SELECT * FROM stomatolog';
				$rez=mysql_query($upit);
				echo "<select name'st'>";
					echo "<option value='0'>Izaberi</option>";
					while($red=mysql_fetch_array($rez))
					{
						echo "<option value='".$red['id_stomatolog']."'>".$red['Ime']." ".$red['Prezime']."</option>";
					}
				echo "</select>";
				echo "<input type='hidden' name='hiden' value='".$_GET['id']."'/>";
				echo "<input type='hidden' name='hiden2' value='".$_GET['datum']."'/>";
				echo "<input type='submit' name='zakazi'/>";
			echo "</form>";
		}
		if(isset($_POST['zakazi']) && $_POST['st']!=0)
		{
			$id_termin=$_POST['hiden'];
			$datum=$_POST['datum'];
			$stomatolog=$_POST['st'];
			$pacijent=$_SESSION['id'];
			$upit="INSERT INTO zakazano VALUES('',$id_termin,$datum,$stomatolog,$pacijent,'',0)";
			$rez=mysql_query($upit);
		}
		if(isset($_POST['zakazi']) && $_POST['st']==0)
		{
			$id_termin=$_POST['hiden'];
			$datum=$_POST['datum'];
			$upit="DELETE FROM zakazano WHERE id_termin=$id_termin AND datum=$datum";
			$rez=mysql_query($upit);
		}
	?>
	
	
	
	
	
	