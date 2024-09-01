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

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$count =  mysqli_num_rows($result);
echo $count. "<br>";

// display the rows returned by the sql query
if($count > 0) {
    
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

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
                    <th>{$row['Serial no']}</th>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['class']}</td>
                </tr>
            </tbody>";

        // echo var_dump($row);
        // echo"<br>";
    }
}

?>