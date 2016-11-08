<?php
	@session_start();
	if(isset($_POST['reg']))
	{
		$ime;
		$prezime;
		$user;
		md5($pass);
		
		$upit='INSERT INTO korisnici VALUES('',$ime,$prezime,$user,$pass)';
		$rez...;
	}
	if(isset($_POST['log']))
	{
		$user;
		md5($pass);
		$upit="SELECT * FROM korinsici WHERE username='$user' AND password='$pass'";
		$rez...;
		if(mysql_num_rows($rez)==1)
		{
			$red=...;
			$_SESSION['id']=$red['id'];
			header('location:autor.php');
		}
	}
?>
	<div id='registracija'>
		Ime: <input type='text' name='ime'/>
		Prezime: <input type='text' name='prezime'/>
		Username: <input type='text' name='user'/>
		Password: <input type='password' name='pass'/>
		<input type='submit' name='reg'/>
	</div>
	<div id='logovanje'>
		Username: <input type='text' name='user1'/>
		Password: <input type='password' name='pass1'/>
		<input type='submit' name='log'/>
	</div>