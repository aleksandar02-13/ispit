<?php
	@session_start();
	if(!isset($_SESSION['uloga']))
	{
		header("location:index.php");
	}
?>
	<a href='sluzba.php?nesto1=1'>Dodavanje korisnika</a>
	<a href='sluzba.php?nesto2=1'>Dodavanje vozila</a>
	<?php
	$dan=date("D",mktime());
	$sat=date("H",mktime());
	if((($dan=="Mon" || $dan="Tue" || $dan="Wen" || $dan="Thu" || $dan="Fri") && ($sat>=8 && $sat<=20)) || (($dan="Sat") && ($sat>=8 && $sat<=16)))
	{
		echo "<a href='sluzba.php?nesto3=1'>Registracija</a>";
	}
	if(isset($_GET['nesto1']))
	{
		$upit='SELECT * FROM grad';
		$rez-mysql_query($upit);
		?>
			<form action='sluzba.php' method='POST'>
				<input type='text' name='ime'/>
				<input type='text' name='prezime'/>
				<input type='text' name='adresa'/>
				<input type='text' name='tel'/>
				<select name='grad'>
					<option value='0'>Izaberi</option>
					<?php
						while($red=mysql_fetch_array($rez))
						{
							echo "<option value='".$red['id_grad']"'>".$red['grad']."</option>";
						}
					?>
				</select>
				<input type='text' name='user'/>
				<input type='pass' name='pass'/>
				<input type='submit' name='dugme1'/>
			</form>
		<?php
	}
		if(isset($_POST['dugme1']))
		{
			$ime;
			$prezime;
			$adresa;
			$tel;
			$grad;
			$user;
			md5($pass);
			
			$upit2="INERT INTO korinsici VALUES('',$ime,$prezime,$adrsa,$grad,$tel,'','','')";
		}
	
	/*----------------------------------DODAVANJE VOZILA---------------------------------------------------------------------------------*/
	
	if(isset($_GET['nesto2']))
	{
		?>
			<form action='sluzba.php' method='POST'>
				<input type='text' name='reg'/>
				<input type='text' name='marka'/>
				<input type='text' name='god'/>
				<input type='text' name='boja'/>
				<input type='submit' name='dugme2'/>
			</form>
		<?php
	}
		if(isset($_POST['dugme2']))
		{
			$reg;
			$marka;
			$god;
			$boja;
			
			$upit2="INERT INTO vozila VALUES('',$reg,$marka,$god,$boja)";
		}
	
/*----------------------------------------------------REGISTRACIJA-----------------------------------------------------------------------*/
	if(isset($_GET['nesto3']))
	{
		$upit='SELECT * FROM grad';
		$rez-mysql_query($upit);
		?>
				<input type='text' name='ime' onBlur='f1(this,"ime")'/>
				<input type='text' name='prezime' onBlur='f2(this,"prezime")'/>
				<input type='text' name='reg_broj' onKeyUp='f3(this,"reg_broj")'/>
				<div id='ispis'>
					
				</div>
		<?php
	}
	?>
	
	
	
	
	