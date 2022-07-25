<?php 
	function bolinuvchi($a, $b)
	{
		if (($a % $b) == 0) {
			echo $a." soni ".$b." soniga bo'linadi!";
		}
		else{
			return $a." soni ".$b." soniga bo'linmaydi!";
		}
	}

	echo bolinuvchi($_POST["a"], $_POST["b"]);
?>