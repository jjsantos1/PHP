<html>
<head>
	<title>PHP Skillset 2 - Grading System</title>
</head>
<body>
<?php
function grade($grade){
	if ($grade<=100 && $grade>=0)
		if ($grade<92)
			if ($grade<88)
				if ($grade<84)
					if ($grade<80)
						if ($grade<76)
							if ($grade<72)
								if ($grade<68)
									if ($grade<64)
										if ($grade<60)
											echo "Singko! 5.0! Fail!";
										else
											echo "Tres! Passing!";
									else
										echo "2.75! Fair!";
								else
									echo "2.5! Sufficient!";
							else
								echo "2.25! Satisfactory!";
						else
							echo "2.0! Very satisfactory!";
					else
						echo "1.75! Good!";
				else
					echo "1.5! Very Good!";
			else
				echo "1.25! Outstanding!";
		else
			echo "1.0! Excellent!";
	else
		echo "Not valid input";
	return;
}
grade(75);
?>
</body>
</html>