<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        // connecting to the database
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $port = 3310;
        $dbname = "details";

        $conn = mysqli_connect($servername, $db_username, $db_password, $dbname, $port);

        if (!$conn) {
            die("Sorry failed to connect" . mysqli_connect_error());
        } else {
            echo "Connection was successful.<br>";
            // submit these to database
            // sql query to be executed
            $sql = "INSERT INTO `users` (`email`, `password`, `createdAt`) VALUES ('$email', '$pass', current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Success</strong> Your details have been submitted successfully!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }

            else {

                echo "<div class='alert alert-secondary alert-dismissible fade show' role='alert'>
                            <strong>Failed</strong>There are some technical issues and Your details have not been submitted!!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }


        }


        $name = "Mohd";
        $age = 24;
        $class = "BCA";



        $result = mysqli_query($conn, $sql);

        // check if data is inserted successfully
        if ($result) {
            echo "<br>Record inserted successfully.";
        } else {
            echo "<br>Record not inserted because of the error ---> " . mysqli_error($conn);
        }
    }

    ?>

    <div class="container mt-3">
        <h1>Please enter your email and password</h1>
        <form  method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>