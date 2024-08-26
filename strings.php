<?php

$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aut harum minima expedita eum quibusdam ad similique, temporibus adipisci odio, natus recusandae fugiat vel commodi hic nulla provident eligendi fuga nisi. Saepe harum quae quasi. Quia autem ipsum, hic optio modi repellendus eveniet aut illum tempore esse sapiente quos reprehenderit.";

echo strlen($str);
echo "<br>";

// count words in string

echo str_word_count($str);
echo "<br>";

print_r(str_word_count($str, 1));
echo "<br>";

print_r(str_word_count("Hello world & good morning!",1));
echo "<br>";

print_r(str_word_count("Hello world & good morning!",1,"&"));
echo "<br>";

// replace word or character in string

echo str_replace("amet", "Moid", $str);
echo "<br>";

echo str_replace("hic","gic", $str);
echo "<br>";

$arr = array("blue","red", "green", "yellow", "red");
print_r(str_replace("red","pink",$arr,$count));
echo "<br>";

echo "Replacements: $count";

$arr = array("blue","red", "green", "yellow", "Red");
print_r(str_ireplace("red", "pink", $arr, $count));
echo "<br>";

echo "Replacements: $count";

