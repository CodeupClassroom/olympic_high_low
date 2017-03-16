<?php

// Exercise: Using the following associative array, produce a script that does the following:
// Make one foreach that outputs only the states with an "x" character in the state name
// Make one foreach that outputs states without the letter "a" in their name
// Make one foreach that outputs the states and abbreviations of all the states starting with vowels.

// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array

// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

$states = [
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'PR' => 'Puerto Rico',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'VI' => 'US Virgin Islands',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming'
  ];

// Make one foreach that outputs only the states with an "x" character in the state name
echo "States with 'x' character in the name:" . PHP_EOL;
foreach($states as $state) {
	if((strpos($state, "x") !== false) || (strpos($state, "X") !== false)) {
		echo "\t" . $state . PHP_EOL;
	}
}
echo PHP_EOL;


echo "States without the letter 'a' in their name:" . PHP_EOL;
foreach($states as $state) {
	if(strpos($state, "a") === false || (strpos($state, "A")) === false) {
		echo "\t" . $state . PHP_EOL;
	}
}
echo PHP_EOL;

$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

echo "States and their abbreviations for states starting with vowels:" . PHP_EOL;
foreach($states as $abbreviation => $stateName) {
	// $stateName[0] gives the first character of the string
	// substr($stateName, 0, 1) also gives the first character of the string.
	// if $stateName[0] == "a" || $stateName == "e" || $statName == "i" .... 
	if(in_array($stateName[0], $vowels)) {
		echo "\t" . $abbreviation . " : " . $stateName . PHP_EOL;
	}
}