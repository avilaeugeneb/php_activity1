<?php 
	
	$a = 1; $b = 0;

	echo ($a  && $b) . " and<br>";
	echo ($a  || $b) . " or<br>";
	echo ($a  XOR $b) . " xor<br>";
	echo !$a . " !<br>";

	$page = "Links";

	// if($page == "Home"){
	// 	echo "You selected Home";
	// }
	// elseif($page == "About"){ 
	// 	echo "You selected About";
	// }
	// else{
	// 	echo "You selected News";
	// }

	switch($page){
		case "Home";
			echo "You selected Home";
			break;
		case "About";
			echo "You selected About";
			break;
		case "News";
			echo "You selected News";
			break;
		case "Login";
			echo "You selected Login";
			break;
		case "Links";
			echo "You selected Links";
			break;
		default;
			echo "Nothing is selected";
	}
	
	echo "<br>";
	echo "While loop";
	echo "<br>";

	$count = 1;
	$count2 = 1;
	while ($count <= 12){
		echo "$count times 12 is ". $count * 12 ."<br>";
		$count++;
	}

	echo "<br>";
	echo "Do while loop";
	echo "<br>";

	do{
		echo "$count2 times 12 is ". $count2 * 12 ."<br>";
		$count2++;
	} while ($count2 <= 12);

	echo "<br>";
	echo "For";
	echo "<br>";

	for($count=1;$count<=12;$count++){
		echo "$count times 12 is ". $count * 12 ."<br>";
	}

	$num = 1;

	$an = $num++;

	echo $num;
	echo "<br>";
	echo $an;
	echo "<br>";

	$num2 = 1;
	$bn = ++$num2;

	echo $num2;
	echo "<br>";
	echo $bn;
	echo "<br>";


?>