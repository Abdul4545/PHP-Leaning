<?php

function helloMsg()
{
    echo "Hello world!";
}
helloMsg();
echo "<br>";

function sumNumbers(int $a, int $b)
{
    return $a + $b;
}
echo sumNumbers(5, 20);
echo "<br>";


// Call by Value -> the value of a variable is passed directly. This means if the value of a variable within the function is changed, it does not get changed outside of the function

function incr($i)  
{  
    $i++;  
}  
$i = 5;  
incr($i);  
echo $i;  
echo "<br>";

// Call by Reference -> the address of a variable (their memory location) is passed. In the case of call by reference, we prepend an ampersand (&) to the argument name in the function definition. Any change in variable value within a function can reflect the change in the original value of a variable.

function incr1(&$i)  
{  
    $i++;  
}  
$i = 55;  
incr1($i);  
echo $i;
echo "<br>";


// Variable Length Argument
function add(...$nums)
{
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
echo add(1, 2, 3, 4);
echo "<br>";


// Default Argument Values
function Hello($name = "Aakash")
{
    echo "Hello $name <br>";
}

Hello("Rohan");
echo "<br>";
Hello();
echo "<br>";
Hello("Lovish");
echo "<br>";

