<!-- http://codeup.dev/php_lec/search_lecture.php -->
<?php 

$foods = [

    'fruit' => 'apple',
    'meat' => 'chicken',
    'cheese' => 'feta',
    'dessert' => 'key lime pie',
    'veggie' => 'zucchini',
    'bread' => 'honey oat bread',
    'test' => '23'

];



// Basic definition
// echo array_search('apple', $foods);

// Third argument
// echo array_search(23, $foods);

// Search bar
if (isset($_GET['search'])) {

	$foodToFind = strtolower($_GET['search']);

	$searchResult = array_search($foodToFind, $foods);

	if (is_string($searchResult)) {
		echo ucfirst($foodToFind) . " is a type of " . $searchResult . ".";
	} else {
		echo "Sorry, no foods were found by that name.";
	}


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>

<body>
	
	<form method="GET">
		<input type="text" name="search" id="search" placeholder="Search foods">
		<button type="submit">Search</button>
	</form>

</body>

</html>






