<?php
	spl_autoload_register(function($class){
		require_once "$class"."."."php";
	});

	Db::getInstance()->get("micko",array("ime","prezime","pol","godiste"));
	
?>

<br><br>Musko : <input type="checkbox" class="micko" onchange="radi()"/><br>


<script type="text/javascript">
	function radi()
	{
		var bokses=document.querySelector(".micko");
		if(bokses.checked)
		{
			alert("radi");
		}
		else return true;
	}
</script>
	
