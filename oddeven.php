<!DOCTYPE html>
<head>
	<title>Odd Even</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
 
		$number = 9;

		if($number%2==0){
			echo "The number is even";
		}

		else {
			echo "The number is odd";
		}

		echo "<br>";
		echo "<br>";
		echo "<br>";


		$sira_mrt = "yes";
		$pera = 101;

		if ($sira_mrt == "yes") {
			if($pera<=100){
				echo "Mag bus ka!";
			}
			else{
				echo "Mag Taxi ka";
			}
		} 
		else {
			echo "Mag MRT ka!";
		}

		echo "<br>";

		$a = "1000";
		$b = "+1000";

		if($a==$b) echo "1";
		if($a===$b) echo "2";

		echo gettype($a);
		echo gettype($b);

	?>

</body>
</html>