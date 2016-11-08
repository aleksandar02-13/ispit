<?php
	if(isset($_POST['dugme2']))
	{	
		$g=array();
		$user;
		$pass=md5($pass);
		
			$upit="SELECT * FROM korisnici INNER JOIN uloga ... WHERE user='$user' AND pass='$pass'";
			$rez=...;
			if(mysql_num_rows($rez)==1)
			{
				$r=...;
				$_SESSION['uloga']=$r['uloga'];
				$_SESSION['id']=$r['id_korisnik'];
			}
			else
			{
				$g[]="Lose";
			}
		
	}
?>
	<form action='registracija.php' method='POST'>
		Username:<input type='text' name='user'/>
		Password:<input type='password' name='pass'/>
		<input type='submit' name='dugme2'/>
	</form>
	<?php
		if(isset($g))
		{
			if(count($g)>0)
			{
				foreach($g as $gr)
				{
					echo $gr."<br/>";
				}
			}
		}
	?>