<?php

// write mode 
// $filePointer = fopen("myfile1.txt","w");
// if the file already exists then it will delete and create new file

// fwrite($filePointer,"This is the file1");
// it will write only once

// fwrite($filePointer,"\nThis content will be also written along with the previous content");

// append mode

$filePointer = fopen("myfile1.txt","a");

fwrite($filePointer,"\n\nThis content will be also written along with the previous content whenever the page will be loaded.");


fclose($filePointer);