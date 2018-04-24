<html>
<head>
	<title>PHP Skillset 3 - Menu of the Day</title>
</head>
<body>
<?php
$day = "wednesday";
function menu($a){
	switch ($a) {
		case "sunday":
			echo "The menu of the day is SINIGANG.";
			break;
		case "monday":
			echo "The menu of the day is ADOBO.";
			break;
		case "tuesday":
			echo "The menu of the day is KALDERETA.";
			break;
		case "wednesday":
			echo "The menu of the day is AFRITADA.";
			break;
		case "thursday":
			echo "The menu of the day is MECHADO.";
			break;
		case "friday":
			echo "The menu of the day is PAKSIW NA PATA.";
			break;
		case "saturday":
			echo "The menu of the day is LIEMPO.";
			break;
		default:
			echo "The input day is invalid.";
	}
}
menu(strtolower($day));
?>
</body>
</html>