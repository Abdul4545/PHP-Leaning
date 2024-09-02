<?php

$filePointer = fopen("myfile.txt","r");

if($filePointer === false) {
    die("Unable to open this file. Please Enter a valid filename");
}

// $content = fread($filePointer, filesize("myfile.txt"));

// echo $content;


// reading a file line by line
// echo fgets($filePointer); 
// echo fgets($filePointer);
// reads only one line and moves pointer to next line

// while($content = fgets($filePointer)) {
//     echo $content . "<br>";
// }



// reading a file character by character
// echo fgetc($filePointer); 
// echo fgets($filePointer);
// reads only one line and moves pointer to next line

// while($content = fgetc($filePointer)) {
//     echo $content;
// }


// write a program which reads the content of the file until . has been encountered

while($content = fgetc($filePointer)) {
    echo $content;
    if($content == ".") {
        break;
    }
}

fclose($filePointer);