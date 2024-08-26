<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Content</title>
</head>

<body>
    <form method="POST">
        Enter your fav color : <input type="text" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

    <p>
        <?php
        if (isset($_POST["submit"])) {
            $favcolor = $_POST['favcolor'];
            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                case "blue":
                    "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Sorry Don't know";
            }
        }
        ?>
    </p>

</body>

</html>