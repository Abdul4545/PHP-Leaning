<?php

$filePointer = fopen("myfile.txt","r");

if($filePointer === false) {
    die("Unable to open this file. Please Enter a valid filename");
}

$content = fread($filePointer, filesize("myfile.txt"));

echo $content;

fclose($filePointer);