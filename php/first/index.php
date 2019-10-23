<!DOCTYPE html>
<html>
<head>
	<meta charset="windows-1251" />
	<title>First</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header">
		<h1 id="main">
			Task: (5*5)*5
		</h1>
		<?php
$a = 5;
$b = 5;
$sum =0;
$n = 5;
$i = 0;
function summa($a, $b){
	$sum += $a*$b;
	return $sum;
}
for($i; $i < $n; $i++)
	$sum += summa(5,5);
echo '<p style="color:red">' . "a = $a <br/> b = $b <br/>" . '</p>';
echo '<p style="color:lightgreen">' . "Summa a*b = $sum <br/>" . '</p>';

$res = 5;
echo '<p style="color:rgb(128,128,256)">' . 'Step by s step: ' . "<br/>" . '</p>';
$sum = 0;
while($res!=0)
{
	echo '<p style="color:red">' . "a = $a<br/>" . '</p>';
	echo '<p style="color:red">' . "b = $b<br/>" . '</p>';
	$sum += summa($a,$b);
	echo '<p style="color:lightgreen">' . "sum = $sum<br/>" . '</p>';
	$res--;
}
?>

	</div>
</body>
</html>