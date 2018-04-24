<!DOCTYPE html>
<html>
<head>
	<title>Yellow by Coldplay</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body> 

	<hr>
	<?php 
		$cold = array('stars','shine','yellow');

		echo "Look at the ".$cold[0]." look how they ".$cold[1]." for you, and everything you do,";
		echo "<br>";
		echo "Yeah they were all ".$cold[2];
	?>

	<hr>

	<ul>
		<?php 
			foreach($cold as $word) {
				echo "<li> $word </li>";
			}
		?>
	</ul>

	<hr>
	<table>
		<?php 
			$team = array('Jepoy','Huge','Renz','Ian','Raia','Billy');
			$colors = array('green', 'blue', 'red');
			$fruits = array('apple','mango','orange');
			$numbers = array(1,2,3,4,5,6,7,8,9);

			for($i=0;$i<3;$i++){
				echo "<tr>";
				echo "<td>Team Name:</td>"."<td>".$colors[$i]."</td>"."<td>".$fruits[$i]."</td><td></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td>Team Members:</td>"."<td>".$team[$i*2]."</td><td>".$team[$i*2+1]."</td><td></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td></td><td>".$numbers[$i]."</td>"."<td>".$numbers[$i+3]."</td>"."<td>".$numbers[$i+6]."</td>";
				echo "</tr>";
			}

		?>
	</table>

	<hr>


</body>
</html>