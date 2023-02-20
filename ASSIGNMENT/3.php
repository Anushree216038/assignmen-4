<?php
$sports = array("Baseball", "Cricket", "Football", "Shooting");
$hobbies = array("Acting", "Drawing", "Music", "Films", "Photography");

// Deleting last array item
$removed1 = array_pop($sports);
print_r($sports);
echo "<br>";
var_dump($removed1);
echo"\n";

// Deleting first array item
$removed2 = array_shift($hobbies);
print_r($hobbies);
echo "<br>";
var_dump($removed2);
?>

