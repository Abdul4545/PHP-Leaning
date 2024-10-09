<?php

echo    "<form action='" . $_SERVER['PHP_SELF'] . "' method = 'POST'>
            <label for = 'name'>Name </label>
            <input type = 'text' name = 'name' id = 'name'>
            </br></br>
            <label for = 'password'>Password </label>
            <input type = 'password' name = 'password' id = 'pw'>
            </br></br>

            <input type = 'submit' name = 'save'>
        
        </form>";

if(isset($_POST["save"])) {
    echo "</br> Welcome ", $_POST["name"], " Your password is ", $_POST["password"];
}