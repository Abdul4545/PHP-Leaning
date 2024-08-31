<?php

echo "Connecting mysql to database <br>";

// ways to connect to MySQL Database
// 1 MySQLi extension
// 2 PDO -> PHP Data Objects

// connecting to the database
$DB_HOST = "localhost";
$db_username = "root";
$db_password = ""; // write your mysql password if it is not connecting 

// create a connection
$conn = mysqli_connect($DB_HOST, $db_username, $db_password);

if (!$conn) {
    die("Sorry failed to connect". mysqli_connect_error());
}

echo "Connection was successful";

?>