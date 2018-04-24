<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<section class="arrayC">

		<?php 

		echo "<h1>Original Array</h1>";

		$colors = ['red','green','blue','pink','white','maroon','black','cream','teal','skyblue','tomato'];
		$arrlength = count($colors);
		echo "Array length :". $arrlength ."<br><br>";


		echo "<h4>Looping through each item</h4>";
		for($i=0;$i<$arrlength;$i++){ //$i+=2 skipping index
			echo $colors[$i] ."<br>";
		}


		echo "<h4>Skipping item one by one</h4>";
		for($i=0;$i<$arrlength;$i+=2){ //$i+=2 skipping index
			echo $colors[$i] ."<br>";
		}

		echo "<h1>Sorted Ascending</h1>";
		sort($colors);

		for($i=0;$i<$arrlength;$i+=2){ //$i+=2 skipping index
			echo $colors[$i] ."<br>";
		}

		echo "<h1>Sorted Descending</h1>";
		rsort($colors);

		for($i=0;$i<$arrlength;$i+=2){ //$i+=2 skipping index
			echo $colors[$i] ."<br>";
		}


		echo "<br>";
		echo "<h1>Associative Arrays</h1>";
		$ages = [
			'Peter'=>'35',
			'Ben'=>'37',
			'Joe' =>'43'
		];

		echo "Age of Peter: ". $ages['Peter'];
		echo "<br>";
		echo "Age of Ben: ". $ages['Ben'];
		echo "<br>";
		echo "Age of Joe: ". $ages['Joe'];
		echo "<br>";

		echo "<br>";

		foreach($ages as  $patientName => $age){
			echo "Key ". $patientName .", Value= ". $age ."<br>";
		}

		$myTeam = [
			"Support" => "Angela",
			"Tank" => "Minotaur",
			"Marksman" => "Clint",
			"Assasin" => "Fanny",
			"Mage" => "Cyclops"
		];
		echo "<br>";

		foreach($myTeam as  $role => $hero){
			echo "Hero: ". $hero ."<br>Role: ". $role ."<br><br>";
		}

		echo "<br>";
		echo "<h1>Multi-dimensional Array</h1>";

		$team_ironman = ['Tony','War Machine','Vision','Spiderman'];
		$team_cap = ['Cap America','Bucky','Hawkeye','Falcon'];
		$civil_war = [$team_ironman,$team_cap];


		echo "<h4>Team Iron Man</h4>";
		echo '$team_ironman = [Tony,War Machine,Vision,Spiderman];';
		echo "<br>";
		echo "<br>";
		foreach ($team_ironman as $hero) {
			echo $hero ."<br>";
		}

		echo "<h4>Team Cap</h4>";
		echo '$team_cap = [Cap America,Bucky,Hawkeye,Falcon];';
		echo "<br>";
		echo "<br>";
		foreach ($team_cap as $hero) {
			echo $hero ."<br>";
		}


		echo "<h4>Team Civil War (Iron Man, Cap)</h4>";
		echo '$civil_war = [$team_ironman,$team_cap];';
		echo "<br>";
		echo "<br>";
		for($i=0;$i<=1;$i++){
			foreach ($civil_war[$i] as $hero) {
				echo $hero ."<br>";
			}
		}

		$student1 = [
			'name' => 'Kynt',
			'age' => 21,
			'occupation' => 'RTP'
		]; 

		$student2 = [
			'name' => 'Sian',
			'age' => 18,
			'occupation' => ['student','labergurl']
		]; 


		$b8dc = [$student1,$student2];

		echo "<br>";
		echo "<br>";
		echo $b8dc[1]['occupation'][1];

		
		echo "<h1>12 days of Christmas Loop</h1>";

		for($daynumber=1; $daynumber<=12; $daynumber++){
			
			switch($daynumber){
				case 1:
				$prefix = "st";
				break;
				case 2:
				$prefix = "nd";
				break;
				case 3:
				$prefix = "rd";
				break;
				default:
				$prefix = "th";
			}

			echo "<h5>On the ". $daynumber.$prefix ." day of Christmas my true love sent to me</h5>";

			// if($daynumber == 1){
			// 	$giftone = ;
			// } else {
			// 	$giftone = "and a Partrige in a Pear Tree.";
			// }

			$gifts = [
				"a Partridge in a Pear Tree.",
				"2 Turtle Doves",
				"3 French Hens",
				"4 Calling Birds",
				"5 Gold Rings",
				"6 Geese a-laying",
				"7 Swans a-swimming",
				"8 Maids a-milking",
				"9 Ladies dancing",
				"10 Lords a-leaping",
				"11 Pipers Piping",
				"12 Drummers Drumming"];

				for($giftnumber=$daynumber; $giftnumber>0; $giftnumber--){
					if($daynumber > 1 && $giftnumber-1==0 ){
						echo ". and ".$gifts[$giftnumber-1]. "<br>";
					}else {
						echo ". ".$gifts[$giftnumber-1]. "<br>";
					}
					
				}

			}


			?>

		</section>

	</body>
	</html>