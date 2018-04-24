<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$username ='John';
		$email_from = 'Pedro Peterson';
		$email_subject = "Hey, $username! You have a new message!";
		$email_body = "You have received a new message from your website contact form.\n\n".
						"The message came from $email_from";

		echo "$email_subject<br>";
		echo "$email_body";

		echo "<br>";

		$username2 = "Jane Smith";
		echo $username2;
		echo "<br>";
		$current_user = $username2;
		echo $current_user;

		echo "<br>";

		echo 'Buzz Lightyear once said: "You\'re a toy!"';
		echo "<br>";
		echo 'This will not expand: \n a newline';
		echo "<br>";
		echo 'Variables do not expand $expand either';

		echo "<br>";

		$team = array('Kato','Shem','Angeli', 'Ali', 'Carmela');
		$colors = array('red','green','blue');
		$fruits = array('mango','apple','orange','lemon');

		echo $team[2];
		echo "<br>";
		echo $colors[0];
		echo "<br>";
		echo $fruits[1];
		echo "<br>";	
		echo $fruits[3];	

		define("ROOT_LOCATION","/usr/local/www");

		$directory = ROOT_LOCATION;

		echo "<br>";

		echo $directory;

	?>

	<h1> 
		<?php echo "Hello World";
		?>
	</h1>

</body>
</html>