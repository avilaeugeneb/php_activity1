<!DOCTYPE html>
<html>
<head>
	<title>Time - Sec,Hours,Mins,Days</title>
</head>
<body>

	<?php

		$seconds = 122*60; //time in seconds
		$days = floor($seconds/(60*60*24)); // secs to mins, mins to hrs , hrs to days
		$daysRem = $seconds % (60*60*24); // remainder of days in seconds divided by seconds
		$hrs = floor($daysRem / (60*60)); // secs to mins, mins to hrs
		$hrsRem = $daysRem % (60*60); // remainder of hrs in seconds divided by seconds
		$mins = floor($hrsRem / 60) ; // secs to mins 
		$minsRem = $hrsRem % 60; // remainder of mins in seconds divided by seconds

		switch($seconds){
			case ($seconds >= (60*60*24));
				echo $days." day(s) ".$hrs." hr(s) ".$mins." min(s) ".$minsRem." sec(s)";
				break;
			case ($seconds >= (60*60));
				echo $hrs." hr(s) ".$mins." min(s) ".$minsRem." sec(s)";
				break;
			case ($seconds >= 60);
				echo $mins." min(s) ".$minsRem." sec(s)";
				break;
			default:
				echo $minsRem." sec(s)";
		}


	?>




</body>
</html>