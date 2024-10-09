<?php

// $cookie_name = "user";
// $cookie_value = "neha";

// setcookie("user", $cookie_value, time() + 60 * 10, '/');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'];
        $cookie_value = $_POST['cookie_value'] ?? '';

        if ($action == 'set') {
            setcookie('my_cookie', $cookie_value, time() + 3600);
            echo "Cookie set!";
        } elseif ($action == 'delete') {
            setcookie('my_cookie', '', time() - 3600);
            echo "Cookie deleted!";
        }
    }
    ?>


    <form action="" method="POST">
        <input type="text" name="cookie_value" placeholder="Enter cookie value">

        <button type="submit" name="action" value="set">Set</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>

</body>

</html>