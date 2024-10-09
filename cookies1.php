<?php

echo "Welcome to the world of cookies";

// syntax to set a cookie
setcookie("category", "books", time() + 60 * 60, "/");

// get cookie

$cat = $_COOKIE["category"];

echo "</br> The cookie is $cat";