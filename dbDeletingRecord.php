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


// showing the available records before deleting
$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

// find the number of records present 
$count =  mysqli_num_rows($result);
$no = 1;
if($count > 0) {

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
                    <th>$no</th>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['class']}</td>
                </tr>
            </tbody>";
            $no++;
    }
}

// DELETING RECORD FROM TABLE

$sqlDelete = "DELETE FROM `students` WHERE `class` = 'NA'";
$resultDelete = mysqli_query($conn, $sqlDelete);
$affected = mysqli_affected_rows($conn);
echo "<br>Number of rows affected : $affected". "<br>";


// showing the available records after deleting
$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$count =  mysqli_num_rows($result);
$no = 1;
if($count > 0) {

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
                    <th>$no</th>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['class']}</td>
                </tr>
            </tbody>";
            $no++;
    }
}

?>