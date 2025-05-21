<?php
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = test_input($_POST['uname']);
$password = test_input($_POST['password']);


$length = strlen($username);
// Homework: username > 3 chars; password "letmein"
if ($length > 3 && $password === "letmein") {
    $_SESSION['user'] = $username;
    header("Location: lions2016.php");
} else {
    $_SESSION['err'] = "Wrong username and/or password";
    header("Location: index.php");
}

?>