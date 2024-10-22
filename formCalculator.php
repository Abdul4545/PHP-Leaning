<?php

echo "<h1>Form calculator using drop down for operations</h1></br>";

echo "
<form method='GET' action='" . $_SERVER['PHP_SELF'] . "'>
    <label for='num1'>First Number: </label>
    <input type='number' name='num1' id='num1' required>
    <br><br>

    <label for='num2'>Second Number: </label>
    <input type='number' name='num2' id='num2' required>
    <br><br>

    <label for='operation'>Select Operation: </label>
    <select name='operation' id='operation'>
        <option value='add'>Addition</option>
        <option value='subtract'>Subtraction</option>
        <option value='multiply'>Multiplication</option>
        <option value='divide'>Division</option>
    </select>
    <br><br>

    <input type='submit' value='Calculate'>
</form>
";


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];

    if ($operation == "add") {
        $result = $num1 + $num2;
    } 
    elseif ($operation == "subtract") {
        $result = $num1 - $num2;
    } 
    elseif ($operation == "multiply") {
        $result = $num1 * $num2;
    } 
    elseif ($operation == "divide") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Error: Division by zero!";
        }
    }

    echo "<h3>Result: $result</h3>";
}

