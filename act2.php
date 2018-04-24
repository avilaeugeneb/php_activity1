<!DOCTYPE html>
<html>
<head>
	<title>Activity 04/24/2018</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 

	echo "<h1>6x6 Square</h1>";
	for($i=0;$i<6;$i++){
		for($j=0;$j<6;$j++){
			echo "* ";
		}
		echo "<br>";
	}

	echo "<h1>6x6 Triangle</h1>";
	for($i=0;$i<=6;$i++){
		for($j=0;$j<$i;$j++){
			echo "* ";
		}
		echo "<br>";
	}

	echo "<h1>6x6 Triangle Reversed</h1>";
	for($i=6;$i>=0;$i--){
		for($j=0;$j<$i;$j++){
			echo "* ";
		}
		echo "<br>";
	}

	echo "<h1>Multiplication Table</h1>";

	echo "<table class='multitable'>";
	for($i=1;$i<=10;$i++){
		echo "<tr>";
		for($j=1;$j<=10;$j++){
			echo "<td>". $i * $j ."</td>" ;
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "<h1>Jedi Ka Ba?</h1>";
	for($i=1;$i<=100;$i++){
		if($i%10==0){
			echo $i." GreyJedi";
		}
		elseif($i%5==0){
			echo $i." Grey";
		}
		elseif($i%2==0){
			echo $i." Jedi";
		}
		else{
			echo $i." Sith";
		}

		echo "<br>";
	}

	echo "<h1>6x6 XOXOX nested switch</h1>";
	for($i=1;$i<=6;$i++){
		for($j=1;$j<=6;$j++){

			switch($i){
				case ($i%2==0):
				switch($j){
					case ($j%2==0):
					echo "X ";
					break;
					default:
					echo "0 ";
				}
				break;

				default:
				switch($j){
					case ($j%2==0):
					echo "0 ";
					break;
					default:
					echo "X ";
				}
			}
			
		}
		echo "<br>";
	}

	echo "<br>";


	echo "<h1>6x6 XOXOX single switch</h1>";
	for($i=1;$i<=6;$i++){
		for($j=1;$j<=6;$j++){

			$a = $i + $j;

			switch($a){
				case ($a%2==0):
					echo "X ";
					break;
				default:
					echo "0 ";
			}
			
		}
		echo "<br>";
	}

	echo "<br>";
	


	?>




</body>
</html>