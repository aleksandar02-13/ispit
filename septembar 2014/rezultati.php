<?php
	$upit='SELECT * FROM (rezultati r INNER JOIN funkcije f ON r.id_funckije=f.id_funckije) INNER JOIN korinsici k ON r.id_kor=k.id_kor ORDER BY rezultat DESC';
	$rez...;
?>
	<table border='1px'>
		<?php
			while($red..)
			{
				echo "<tr>";
					echo "<td>".$red['ime']." ".$red['prezime']."</td>";
					echo "<td>".$red['funckija']."</td>";
					echo "<td>".$red['vreme']."</td>";
				echo "</tr>";
			}
		?>
	</table>