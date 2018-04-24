<html>
<head>
	<title>PHP Skillset 4 - Multiplication Table</title>
</head>
<body>
<?php
function mult($a,$b){
	for($i=1; $i<=$a; $i++){
		for($j=1; $j<=$b; $j++){
			echo $i . " x " . $j . "= " . $i*$j . "<br>";
		}
	echo "<br>";
	}	
}
mult(12,11); //indicate multiplier and multiplicand
?>
</body>
</html>