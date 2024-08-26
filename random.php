<?php

echo rand();
echo "<br>";

echo rand(10, 100);
echo "<br>";

echo rand(1,2);
echo "<br>";



$head = 0;
$tail = 0;
for ($i= 1; $i <= 100; $i++) { 
    $random = rand(1,2);
    if( $random == 1) {
        // echo "$i Heads, I win";
        $head++;
    } else {
        // echo "$i Tails, you win!";
        $tail++;
    }
    // echo "<br>";  
}

echo "$head    $tail";

