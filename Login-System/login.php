<?php

$login = false;
$showError = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'D://xampp//htdocs//PHP-Learning//Login-System/parts//dbConnect.php';

    $email = $_POST["useremail"];
    $password = $_POST["password"];

    // $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        while($row = mysqli_fetch_assoc($result)) {

            if(password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['email'] = $email;
        
                // redirect
                header("location: welcome.php");
            }

            else {
                $showError = "Invalid Credentials";
            }
        }    
    }

    else {
        $showError = "Invalid Credentials";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php require 'D://xampp//htdocs//PHP-Learning//Login-System/parts//nav.php' ?>

    <?php

        if($login) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Success!</strong> You are logged in.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }


        if($showError != "") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error!</strong> ' .$showError .
                 '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }
    ?>


    <div class="container bg-body-secondary p-4 mt-5 rounded">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Login to our website</h1>

                <form action="http://localhost/PHP-Learning/Login-System/login.php" method="post">

                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="useremail" name="useremail">
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>