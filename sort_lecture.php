<?php 

$foods = [

    'fruit' => 'apple',
    'meat' => 'chicken',
    'cheese' => 'feta',
    'dessert' => 'key lime pie',
    'veggie' => 'zucchini',
    'bread' => 'honey oat bread'

];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sorting Lecture</title>
</head>
<body>

	<h2>asort() - asc by value</h2>
    <?php asort($foods); var_dump($foods); ?>

    <h2>arsort() - desc by value</h2>
    <?php arsort($foods); var_dump($foods); ?>

    <h2>ksort() - asc by key</h2>
    <?php ksort($foods); var_dump($foods); ?>

    <h2>krsort() - desc by key</h2>
    <?php krsort($foods); var_dump($foods); ?>

    <h2>sort() - asc by value (resets keys)</h2>
    <?php sort($foods); var_dump($foods); ?>

    <h2>rsort() - desc by value (resets keys)</h2>
    <?php rsort($foods); var_dump($foods); ?>

    <h2>shuffle() - randomizes values (resets keys)</h2>
    <?php shuffle($foods); var_dump($foods); ?>

</body>
</html>