<?php

// connecting to the database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$port = 3310;
$dbname = "dbmoid";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname, $port);

if (!$conn) {
    die("Sorry failed to connect". mysqli_connect_error());
}

echo "Connection was successful";

// create a table in the database
$sql = "create table `students`(`Serial no` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, age INT(2) NOT NULL, `class` VARCHAR(12) NOT NULL, PRIMARY KEY(`Serial no`))";

$result = mysqli_query($conn, $sql);

if($result) {
    echo "<br>Table created successfully.";
}

else {
    echo "<br>Table not created because of the error ---> " .mysqli_error($conn);
}

