<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


$listOfNames = explode(",", $physicistsString);

print_r($listOfNames);

$list = "fer|ryan|";

$listArray = explode("|", $list);
array_pop($listArray);
print_r($listArray);

$resultString = implode(" - ", $listOfNames);

echo $resultString;

?>