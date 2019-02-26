<?php
	$r = 49;
	$luas;
	$keliling;
	
	function kelilingLingkaran($jari){
		
		$keliling = 2 * 3.14 * $jari;
		return $keliling;
	}
	function luasLingkaran($jari_jari){
		
		$luas = 3.14 * $jari_jari * $jari_jari;
		return $luas;
	}
	echo "Keliling lingkaran : ";
	echo kelilingLingkaran($r);
	echo "<br>";
	echo "Luas lingkaran : ";
	echo luasLingkaran($r);
?>