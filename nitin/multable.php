<?php 
for ($i = 1; $i < 11; $i++) {
	for($j = 1; $j < 11; $j++) {
		if ($j == 1) {
			echo str_pad($i*$j, 2, " " , STR_PAD_LEFT);

		} else {
			echo str_pad($i*$j, 4, " " ,STR_PAD_LEFT);
		}

	}
	echo "\n";
	echo "<br>";
}
?>