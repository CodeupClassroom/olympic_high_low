<?php 

// Humanize list
function humanizedList($array)
{

    $output = "";
    $lastValue = array_pop($array);
    $output = implode(", ", $array);
    $output .= ", and $lastValue";

    return $output;
    
}


// Humanize list with sorting option
function humanizedListSort($array, $sortNames = false)
{

    if ($sortNames == true) {
        sort($array);
    }

    $output = "";
    $lastValue = array_pop($array);
    $output = implode(", ", $array);
    $output .= ", and $lastValue";

    return $output;

}

// Humanize list with sorting option and first names only (EXTRA BONUS)
function humanizedFirstNameList($array, $sortNames = false)
{
   $output = "";

   // Eliminate last names

   $names = implode(" ", $array);
   $namesArray = explode(" ", $names);
   $firstNamesArray = [];
   for ($i = 0; $i < count($namesArray); $i += 2) {
        array_push($firstNamesArray, $namesArray[$i]);
   }

   if ($sortNames == true) {
    sort($firstNamesArray);
   }

   $lastValue = array_pop($firstNamesArray);
   $output = implode(", ", $firstNamesArray);
   $output .= ", and $lastValue";

   return $output;

}

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);

 // Humanize the list
    // $famousFakePhysicists = humanizedList($physicistsArray);
    // $famousFakePhysicists = humanizedListSort($physicistsArray, true);
    $famousFakePhysicists = humanizedFirstNameList($physicistsArray, true);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
