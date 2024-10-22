<?php

// sanitize string
$str = "<h1>Hello Moid!</h1>";
$str = filter_var($str, FILTER_SANITIZE_STRING);
echo $str;