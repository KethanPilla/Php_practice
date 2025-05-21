<?php
session_start();
// If the cart is empty, send the user back to index.php.
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header("Location: index.php");
    exit;
}
?>
<html>
    <head>
        <title>Checkout</title>
    </head>
    <body>
        <h1>Checkout</h1>
        <h2>Your Cart</h2>
        <ul>
            <?php 
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            ?>
        </ul>
        <h2>Please enter your credentials:</h2>
        <form action="success.php" method="post">
            Username: <input type="text" name="uname"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
