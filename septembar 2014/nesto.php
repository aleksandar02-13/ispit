<?php
	if(isset($_POST['ponisti']))
	{
	
		$skriven;
		$korisnik=$_SESSION['id'];
		$span_hiden;
		$sad=mktime();
		$datum=date("d.m.Y",$sad);
		$vreme=date("H:i:s",$sad);
		
		$upit="INSERT INTO rezultati VALUES('',$span_hiden,$skriven,$datum,$vreme,$korisnik)";
		
	}
	$x=$_GET['x'];
	switch(x)
	{
		case "1":
		{
			?>
			<forma>
				<input type='text' value="<?php echo rand(0,20); ?>" id='prvi'/>
				+
				<input type='text' value="<?php echo rand(0,20); ?>" id='drugi'/>
				=
				<input type='text' id='rez'/>
				<br/>
				<input type='button' id='provera' onClick='return provera_poz(<?php echo $x; ?>)'/>
				<input type='submit' id='ponisti' onSubmit='return brisanje()' name='ponisti'/>
				<img src='coveculjak.jpg'/>
				<span id='span1'>0</span>
				<input type='hidden' name='span_hiden' id='span_hiden' value='0'/>
				<input type='hidden' name='skriven' value='<?php echo $x; ?>'/>
			</forma>
			<?php
			break;
		}
		.
		.
		.
		case "3":
		{
			?>
			<forma>
				<input type='text' value="<?php echo rand(0,20); ?>" id='prvi'/>
				-
				<input type='text' value="<?php echo rand(0,20); ?>" id='drugi'/>
				=
				<input type='text' id='rez'/>
				<br/>
				<input type='submit' id='provera' onSubmit='return provera_neg()'/>
				<input type='button' id='ponisti' onClick='brisanje()'/>
				<img src='coveculjak.jpg'/>
				<span id='span'>0</span>
				<input type='hidden' name='skriven' value='<?php echo $x; ?>'/>
			</forma>
			<?php
			break;	
		}
	}
?>








