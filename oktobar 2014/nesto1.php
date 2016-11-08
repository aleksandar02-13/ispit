<?php
	$niz=array();
	$kor=$_GET['kor'];
	$upit='SELECT * FROM korisnici WHERE ime LIKE %$kor%';
	$re....
	while()
	{
		$niz.="<a href='#' onClick='f6(".$red['ime'].")'>".$red['ime']."</a>";
	}
	if(isset($niz))
	{
		foreach($niz as $n)
		{
			echo $n."<br/>";
		}
	}
?>