<?php
	$pass = "mica2";
	$submitted = '$2y$10$bXx44qxYyKAUkETCti1hou7MeJtjJPvx52LOIy4qv/1Nfvi2fe8QC';
	var_dump(password_verify($pass, $submitted));
?>