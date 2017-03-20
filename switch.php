<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
	case 1:
		echo "Monday's blue" . PHP_EOL;
		break;
	case 2:
		echo "Tuesday's gray" . PHP_EOL;
		break;
	case 3:
		echo "Wednesday's too" . PHP_EOL;
		break;
	case 4: 
		echo "Thursday doesn't even start!" . PHP_EOL;
		break;
	case 5:
		echo "Friday, I'm in love!" . PHP_EOL;
		break;
	case 6:
		echo "Saturday night fever!" . PHP_EOL;
		break;
	case 7:
		echo "Sunday morning coming down..." . PHP_EOL;
		break;
	default:
		echo "omg, you found a new day of the week!" . PHP_EOL;
 }	