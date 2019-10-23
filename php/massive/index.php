<?php
	$n = array(1, 2, 5, 17, 38, 10, 11);

	echo 'Massive: ';
	foreach ($n as $key) {
		echo $key . ', ';
	}
	echo '<br/>';

	$minimum = min($n);
	$maximum = max($n);

	echo 'Minimum: ' . $minimum . '<br/>
	Maximum: ' . $maximum;

	$min_array = array();
	$max_array = array();

	while ($minimum > 0){
		$min_array[] = $minimum % 10;
		$minimum = intval($minimum / 10);
	}

	$min_array = array_reverse($min_array);

	while ($maximum > 0){
		$max_array[] = $maximum % 10;
		$maximum = intval($maximum / 10);
	}

	$max_array = array_reverse($max_array);
	
	$sum = 0;

	foreach ($min_array as $key) {
		$sum += $key;
	}

	foreach ($max_array as $key) {
		$sum += $key;
	}

	echo '<br/>Summ of minimum numbers and maximum numbers = ' . $sum;
?>