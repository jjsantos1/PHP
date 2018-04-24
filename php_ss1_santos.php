<html>
<head>
	<title>PHP Skillset 1 - Operations Between Two Numbers</title>
</head>
<body>
<?php
$x = 10;
$y = 5;
function sum($x,$y){
	$sum = $x + $y;
	return $sum;
}
function diff($x,$y){
	$diff = $x - $y;
	return $diff;
}
function prod($x,$y){
	$prod = $x * $y;
	return $prod;
}
function quo($x,$y){
	$quo = $x / $y;
	return $quo;
}
echo "The sum of two numbers is: " . sum($x,$y) . ".<br>";
echo "The difference of two numbers is: " . diff($x,$y) . ".<br>";
echo "The product of two numbers is: " . prod($x,$y) . ".<br>";
echo "The quotient of two numbers is: " . quo($x,$y) . ".<br>";
?>
</body>
</html>