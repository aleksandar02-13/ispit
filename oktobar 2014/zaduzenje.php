<?php
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga']!='bibliotekar')
	{
		header("location:index.php");
	}
?>
	Korisnik:<input type='text' name='kor' onKeyUp='f1(this.value)'/>
	Knjiga:<input type='text' name='knj' onKeyUp='f2(this.value)'/>
	<div id='kor'></div>
	<div id='knj'></div>
	<input type='submit' name='dugme'/>
	
	<?php
		if(isset($_POST['dugme']))
		{
			$kor;
			$knjig;
			$upit3="SELECT id_kor FROM korinsici WHERE ime=".$kor;
			$rez3=..;
			$upit4="SELECT id_knjiga FROM knjige WHERE naziv=".$knj;
			$rez4=..;
			$datum=mktime();
			if(mysql_num_rows($rez3)==1 && mysql_num_rows($rez4)==1)
			{
				$red3=...;
				$red4=...;
				$upit="INSERT INTO zaduzivanje VALUES('',".$red3['id_kor'].",".$red4['id_knj'].",$datum,'')";
				$upit="UPDATE stanje SET br_knjiga=br_knjiga-1,br_zaduzivana=asd+1 WHERE id_knjiga=".$knjig;
				$rez...;
				$rez...;
			}
		}
	?>