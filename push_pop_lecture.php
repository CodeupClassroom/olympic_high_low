<?php 

	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Michael', 'Fer'];

	array_push($names, 'Zach', 'Ryan');

	print_r($names);

	$whoIsOnVacations = array_pop($names);
	echo $whoIsOnVacations." is on vacations". PHP_EOL;

	$thisWasFirst = array_shift($names);
	print_r($names);
	echo $thisWasFirst." was first ".PHP_EOL;

	array_unshift($names, 'Luis', 'Justin');
	print_r($names);

 ?>