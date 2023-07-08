<?php

for ($i=1; $i <= 1; $i++) { 
	echo "-- Perkalian ".$i." --";
	echo "<br>";
	for ($j=1; $j <= 10; $j++) { 
		echo $i . 'x' . $j . ' = '. ($i * $j) . " - ";
		echo (($i * $j) % 2 == 0) ? "Bilangan Genap" : "Bilangan Ganjil";
		echo "<br>";
	}
	echo "<br>";
}

?>