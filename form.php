<?php
// echo "This is get and post tutorial in php";
// if (isset($_POST[""])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];
// }

// submit these to database
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Get and Post</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success</strong> Your email is " . $email . "  and password " . $pass . " has been submitted successfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

        // submit these to database
    }

    ?>

    <div class="container mt-3">
        <h1 class = "mt-5">This is get and post tutorial in php</h1>
        <h1>Please enter your email and password</h1>
        <form action="form.php" method="post">
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


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>