<?php

// PHP Indexed Arrays
// In indexed arrays each item has an index number.

// By default, the first item has index 0, the second item has item 1, etc.

$cars = array("Volvo", "BMW", "Toyota");

// Access Indexed Arrays
echo $cars[0];
echo "<br>";

// Change Value
$cars[1] = "Ford";
var_dump($cars);
echo "<br>";

// Loop Through an Indexed Array
foreach ($cars as $x) {
    echo "$x <br>";
}

array_push($cars, "Ford");
var_dump($cars);
echo "<br>";


$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

// The next array item gets the index 15
array_push($cars, "Ford");
var_dump($cars);
echo "<br>";

// function myFunction()
// {
//     echo "I come from a function!";
// }

// $myArr = array("Volvo", 15, myFunction);

// $myArr[2]();
// echo "<br>";



// PHP Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);
echo "<br>";
echo $car["model"];

// Change Value
$car["year"] = 2024;
var_dump($car);
echo "<br>";

// Loop Through an Associative Array
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}


// PHP - Multidimensional Arrays

$result = array(
    array("Moid", 7.8, "pass"),
    array("Asaad", 9.0, "pass"),
    array("Saad", 8.5, "pass"),
    array("Anuj", 1.7, "fail")
);

print_r($result);
echo "<br>";
echo "<br>";
echo "<br>";


echo "<table border = '2px'>";
echo "<tr>
    <th>Name</th>
    <th>CGPA</th>
    <th>Result</th>
  </tr>";
foreach($result as $res) {
    echo "<tr>";
    foreach ($res as $r) {
        echo "<td> $r </td>";
    }
}


$result1 = array(
    array("name" => "Moid", "cgpa" => 7.8, "status" => "pass"),
    array("name" => "Asaad", "cgpa" => 9.0, "status" => "pass"),
    array("name" => "Saad", "cgpa" => 8.5, "status" => "pass"),
    array("name" => "Anuj", "cgpa" => 1.7, "status" => "fail")
);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<table border = '2px'>";
echo "<tr>
    <th>Name</th>
    <th>CGPA</th>
    <th>Result</th>
  </tr>";
foreach ($result1 as $rows) {
    echo "<tr>";
    foreach ($rows as $row => $val) {
        echo "<td> $val </td>";
    }
    echo "</tr>";
}