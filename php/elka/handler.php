<?php
	$n = $_GET['s1'];
	echo 'Elka: <br/>';
	
	for ($i=0; $i<$n; $i++){
		for ($j=$i;$j<$n;$j++)
			echo '//';
		for($k = $n; $k>=($n-(2*$i));$k--)
			echo 'A';
		for ($j=$i;$j<$n;$j++)
			echo '//';
		echo '<br/>';
	}

?>