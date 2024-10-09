<?php

// what is a session ?
// a way of managing information across different pages


// verify the user login info
session_start();

$_SESSION['username'] = "Moid";
$_SESSION['favCat'] = "Books";

echo "Saved your session";
