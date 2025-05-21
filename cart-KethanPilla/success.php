<?php
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = isset($_POST['uname']) ? test_input($_POST['uname']) : "";
$password = isset($_POST['password']) ? test_input($_POST['password']) : "";

// Credentials are valid if the username and password are identical and longer than 3 characters.
if (strlen($username) > 3 && $username === $password) {
    $message = "Welcome, " . htmlspecialchars($username) . ". Your card has been charged.";
} else {
    header("Location: checkout.php");
}
?>
<html>
    <head>
        <title>Success</title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <?php if (strlen($username) > 3 && $username === $password) { ?>
            <h2>Your Cart</h2>
            <ul>
                <?php 
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<li>" . htmlspecialchars($item) . "</li>";
                    }
                }
                ?>
            </ul>
        <?php } else { ?>
            <p><a href="checkout.php">Go back to checkout</a></p>
        <?php } ?>
    </body>
</html>
