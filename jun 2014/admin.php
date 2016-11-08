<?php
	$upit="SELECT * FROM stomatolog INNER JOIN zakazano on s.id_stomatolog=z.id_stomatolog";
	$rez-mysql....;
	
?>
	<select name='lista' onChange='f(this)'>
		....
	</select>
	
	<?php
		$meseci=array("January"=>0,"February"=>0,0,0,0,0,0,0,0,0,0,0);
		while($red=mysql_fetch_array($rez))
		{
			if(date("n",$red['datum'])=="1")
			{
				$meseci["January"]+=$red['cena']/2;
			}
		}
	?>