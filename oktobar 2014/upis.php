<?php
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga']!='bibliotekar')
	{
		header("location:index.php");
	}
	$upit='SELECT * FROM autor';
	$upit2="SELECT * FROM izdavac";
	$rez=...;
	$rez2=...;
?>	
	<form action='upis.php' method='POST'>
		Naziv: <input type='text' name='naziv'/>
		Autor:<select name='autor'>
			<?php
				while($red=...)
				{
					echo "<option value='".$red['id_autor']."'>".$red['autor']."</option>";
				}
			?>
		</select>
		Izdavac:<select name='izdavac'>
			<?php
				while($red=...)
				{
					echo "<option value='".$red['izdavac']."'>".$red['izdavac']."</option>";
				}
			?>
		</select>
		Godina izdavanja: <input type='text' name='godina'/>
		Slika: <input type='file' name='slika'/>
		Broj strana: <input type='text' name='broj'/>
		<input type='submit' name='dugme'/>
	</form>
	<?php
		if(isset($_POST['dugme']))
		{
			$folder='slike/';
			$naziv;
			$autor;
			$izdavac;
			$broj;
			$slika=$_FILES['slika']['name'];
			$slika_tmp=$_FILES['slika']['tmp_name'];
			$godina;
			
			if(move_uploaded_file($slika_tmp,$folder.$slika))
			{
			
				$upit='INSERT INTO knjige VALUES(....)';
				$rez...;
			}
		}
	?>