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

echo "Connection was successful.<br>";

$name = "Mohd";
$age = 24;
$class = "BCA";

// sql query to be executed
$sql = "INSERT INTO `students` (`name`, `age`, `class`) VALUES ('$name', '$age', '$class')";

$result = mysqli_query($conn, $sql);

// check if data is inserted successfully
if($result) {
    echo "<br>Record inserted successfully.";
}

else {
    echo "<br>Record not inserted because of the error ---> " .mysqli_error($conn);
}