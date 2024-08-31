<?php

// connecting to the database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$port = 3310; // it may be not required for most of the users

// create a connection
// $conn = mysqli_connect($servername, $db_username, $db_password);

// for those who require port no
$conn = mysqli_connect($servername, $db_username, $db_password,"", $port);

if (!$conn) {
    die("Sorry failed to connect". mysqli_connect_error());
}

echo "Connection was successful";

// create a database
$sql = "create database dbMoid";
$result = mysqli_query($conn, $sql);

// check if database is created successfully
if($result) {
    echo "<br>Database created successfully.";
}

else {
    echo "<br>Database not created because of the error ---> " .mysqli_error($conn);
}


