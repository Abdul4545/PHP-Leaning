<?php

// connecting to the database
$DB_Server = "localhost";
$db_username = "root";
$db_password = ""; // write your mysql password if it is not connecting 
$database = "users";
$port = 3310;

// create a connection
$conn = mysqli_connect($DB_Server, $db_username, $db_password, $database, $port);

if (!$conn) {
    die("Sorry failed to connect ". mysqli_connect_error());
}

?>