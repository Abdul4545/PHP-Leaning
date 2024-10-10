<?php

// session_start();

if (session_status() === "loggedIn") {
  session_start();
}

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
  $loggedIn = true;
}

else {
  $loggedIn = false;
}

echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/PHP-Learning/Login-System">My Login System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/PHP-Learning/Login-System/welcome.php">Home</a>
        </li>';

        if(!$loggedIn) {
          echo '<li class="nav-item">
            <a class="nav-link" href="http://localhost/PHP-Learning/Login-System/login.php">Login</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/PHP-Learning/Login-System/signup.php">Sign Up</a>
          </li>';
        }

        if($loggedIn) {
          echo '<li class="nav-item">
            <a class="nav-link" href="http://localhost/PHP-Learning/Login-System/logout.php">Logout</a>
          </li>';
        }
        
      echo '</ul>
    </div>
  </div>
</nav>'

?>