<?php

// if(file_exists("file.html")) {
//     $file = fopen("file.html", "r");

//     echo fread($file, filesize("file.html"));
//     // length arugment is mandatory


//     $data = readfile("file.html");
//     echo $data;
// }

// else {
//     die("File not found");
// }


// error handling function
function customError($errno, $errstr) {
    echo "<b>Error: </b> [$errno] $errstr";
    echo " Ending Script ";
    die();
}

// set error handler
set_error_handler("customError", E_USER_ERROR);

// trigger error
// echo $test;

$test = 2;
if( $test >= 1) {
    trigger_error("value must be 1 or below", E_USER_ERROR);
}