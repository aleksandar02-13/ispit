<?php 
		$multiplier = 1;
		$size = 1024 * $multiplier;
		for($i = 1; $i <= $size; $i++) {
			echo ".";
		}
		ob_flush();
		flush();
		sleep(2);
		echo "Hello World";
	?>