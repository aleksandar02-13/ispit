<?php
	if(isset($_POST['dugme']))
	{	
		$g=array();
		$name;
		$user;
		$pass=md5($pass);
		
		if(!preg_match("/^[A-z]+$/",$name))
		{
			$g[]="Lose ime";
		}
		if(!preg_match("/^[\w\d\s]+$/",$user))
		{
			$g[]="Los username";
		}
		if(!preg_match("/^[\w\d\s]{4,}$/",$pass))
		{
			$g[]="Los password";
		}
		if(count($g)==0)
		{
			$upit="INSERT INTO korinsici VALUES('',$name,$username,$pass,1)";
			$rez=...;
		}
	}
?>
	<form action='registracija.php' method='POST'>
		Ime:<input type='text' name='name'/>
		Username:<input type='text' name='user'/>
		Password:<input type='password' name='pass'/>
		<input type='submit' name='dugme'/>
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