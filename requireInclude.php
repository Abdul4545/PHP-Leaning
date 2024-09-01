<?php

// include ("dbConnectingMySQL1.php");
// if the file is not present this will show warning and will proceed with the remaining code of the file

require ("dbConnectingMySQL.php");
// if the file is not present this will show error and will not proceed with the remaining code of the file

echo "<br>Hello World";

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$count =  mysqli_num_rows($result);

// display the rows returned by the sql query
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
                    <th>{$row['Serial no']}</th>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['class']}</td>
                </tr>
            </tbody>";
    }
}