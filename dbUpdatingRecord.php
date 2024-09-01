<?php

// connecting to the database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$port = 3310;
$dbname = "dbmoid";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname, $port);

if (!$conn) {
    die("Sorry failed to connect" . mysqli_connect_error());
} else {
    echo "Connection was successful.<br>";
}

// useage of WHERE clause to fetch data from the database
// $sql = "SELECT * FROM `students` WHERE `class` = 'BCA'";

// useage of WHERE clause to update data
$sql = "UPDATE `students` set `class` = 'BCA Graduate' WHERE `Serial no` = 4 ";
$result = mysqli_query($conn, $sql);

$affected = mysqli_affected_rows($conn);
echo "Number of rows affected : $affected". "<br>"; 

if($result) {
    echo "<br> Updated record successfully";
}

else {
    echo "<br> failed to update the record";
}

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$count =  mysqli_num_rows($result);
echo "<br>" .$count. " Number of records are present". "<br>";
$no = 1;

if (mysqli_num_rows($result) > 0) {
    echo "<table>
  <thead>
    <tr>
      <th>Serial No</th>
      <th>Name</th>
      <th>Age</th>
      <th>class</th>
    </tr>
  </thead>";

    while($row = mysqli_fetch_assoc($result)) {

        echo "<tbody>
                <tr>
                    <th>{$no}</th>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['class']}</td>
                </tr>
            </tbody>";
            $no++;
    }
}