<?php
$x = 1;
while ($x <= 10) {
    echo "The number is: $x <br>";
    $x++;
}

echo "<br>";

$x = 10;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 9);

echo "<br>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br>";

echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Bread", "Butter");
foreach ($arr as  $value) {
    echo "$value <br>";
}