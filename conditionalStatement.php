<?php

$num1 = 10;
$num2 = 20;

if ($num1 < $num2) {
    echo "$num2 is greater than $num1";
} else if ($num1 > $num2) {
    echo "$num1 is greater than $num2";
} else {
    echo "$num1 is equal to $num2";
}

echo "<br>";

$i = "2";
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}


echo "<br>";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";


// If you want multiple cases to use the same code block, you can specify the cases like this:
    
$d = 3;
switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}