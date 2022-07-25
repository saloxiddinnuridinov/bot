<?php  
	function factorial($x)
	{
		$z = 1;
		for ($i=1; $i<=$x ; $i++) { 
			$z = $z * $i; 
		}
		return number_format($z);
	}
		echo factorial($_POST["x"]);
?>