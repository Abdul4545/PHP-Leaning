<?php

// Arithmetc Operators
echo 4 + 5 - 2 * 5 / 3 % 2 ** 5;
echo "</br>";
echo pow(2,8);
echo "</br>";


// assignment operators

$num1 = 10;
$num2 = 20;
$num3 = $num1;
$num2 += $num1;
$num4 = "10";

// comparison operators

// echo $num4 == $num1;
// echo "</br>";
echo $num4 === $num1;
echo "</br>";

// echo $num1 != $num2; // not equal
// echo "</br>";
// echo $num1 <> $num2; // not equal


// PHP Increment / Decrement Operators
++$num1;
--$num2;



// logocal operators

$a = 10;
$b = 20;
$c = 30;

if($a == $b || $a != $c) {
    echo "something 1";
}

echo "<br>";

if($a == $b or $a != $c) {
    echo "something 1";
}

echo "<br>";



// ternary operator

$name = "Moid";
$x = (empty($name)) ? "Yes" : "No";
echo $x;

echo "<br>";

echo ($a == 10) ? "Yes it is $a " : "No it is not";

