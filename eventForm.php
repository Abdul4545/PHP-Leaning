<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
</head>
<body>

    <?php

        $name = $email = $contact = $eventDate = $attendees = $comments = "";
        $nameErr = $emailErr = $contactErr = $eventDateErr = $attendeesErr = $commentsErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // name validation
            if(empty($_POST["name"]) || !preg_match("/^[a-zA-Z]{3,}$/", $_POST["name"])) {
                $nameErr = "Name must contain only letters and space, and be atleast 3 char long";
            }

            else {
                $name = test_input($_POST["name"]);
            }

            // email validation
            if(empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }

            else {
                $email = test_input($_POST["email"]);
            }

            // contact validation
            if(empty($_POST["contact"]) || !preg_match("/^[0-9]{10}$/", $_POST["contact"])) {
                $emailErr = "phone no must be 10 digit";
            }

            else {
                $email = test_input($_POST["contact"]);
            }
            
        }

        function test_input($data) {
            $data = trim($data);
            $data = htmlspecialchars($data);

            return $data;
        }


    ?>
    
</body>
</html>