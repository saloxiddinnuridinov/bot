<?php 
	$x = $_POST["x"];
	$y = $_POST["y"];
	$z = $x - $y;

	$s100 = 100000;
	$s50 = 50000;
	$s20 = 20000;
	$s10 = 10000;
	$s5 = 5000;
	$s2 = 2000;
	$s1 = 1000; 
	$s05 = 500;

	$p100 = floor($z/$s100);
	$p50 = floor(($z%$s100) / $s50);
	$p20 = floor(($z-($p100*$s100+($p50*$s50))) / $s20);
	$p10 = floor(($z-($p100*$s100+($p50*$s50) + ($p20*$s20))) / $s10);
	$p5 = floor(($z-($p100*$s100+($p50*$s50) + ($p20*$s20) + ($p10*$s10))) / $s5);
	$p2 = floor(($z-($p100*$s100+($p50*$s50) + ($p20*$s20) + ($p10*$s10) + ($p5*$s5))) / $s2);
	$p1 = floor(($z-($p100*$s100+($p50*$s50) + ($p20*$s20) + ($p10*$s10) + ($p5*$s5) +($p2*$s2))) / $s1);
	$p05 = floor(($z-($p100*$s100+($p50*$s50) + ($p20*$s20) + ($p10*$s10) + ($p5*$s5) +($p2*$s2)+($p1*$s1))) / $s05);

	echo "Siz sotib oldingiz: ".$y." so'mlik tovar"."<br><br>";
	echo "Sizga qaytim beriladi ".$z." so'm pul!<br/><br/>";
	echo $s100." so'mlikdan = ".$p100."-ta<br/>";
	echo $s50." so'mlikdan = ".$p50."-ta<br/>";
	echo $s20." so'mlikdan = ".$p20."-ta<br/>";
	echo $s10." so'mlikdan = ".$p10."-ta<br/>";
	echo $s5." so'mlikdan = ".$p5."-ta<br/>";
	echo $s2." so'mlikdan = ".$p2."-ta<br/>";
	echo $s1." so'mlikdan = ".$p1."-ta<br/>";
	echo $s05." so'mlikdan = ".$p05."-ta<br/>";
	echo "Yuqoridagi kuponlardan ".$z." so'm berildi!";
?>