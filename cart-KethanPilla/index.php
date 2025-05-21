<?php
session_start();
// A three-page application that uses NO HTML FORMS.

// TODO: Create a shopping cart, using a PHP array, by saving items into the
// cart and saving the cart into the session. Use the same concepts as in 
// your JSP solution.
if (!isset($_SESSION['cart'])) {
    // create empty cart
    $_SESSION['cart'] = array();
}

// Check for query string parameters and add item to cart
if (isset($_GET['brand']) && isset($_GET['product'])) {
    $item = $_GET['brand'] . " " . $_GET['product'];
    $_SESSION['cart'][] = $item;
}
?>
<html>
    <head>
        <title>Shopping Cart</title>
    </head>
    <body>
        <!-- TODO: Create a HTML link to the checkout page (checkout.php).
            If there is nothing in the cart, send them back here from
            checkout.php. Otherwise, show the contents and challenge for
            credentials.  test the credentials in success.php and
            show the message only if the credentials are "valid" (username
            and password are the same and more than 3 characters).
        -->
        <a href="checkout.php">Checkout <br></a>

        <!-- TODO: display each item in the db table -->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bestbye";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, brand, product, price FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row as a clickable link using query string
            while ($row = $result->fetch_assoc()) {
                echo "<a href='index.php?brand=" . urlencode($row['brand']) . "&product=" . urlencode($row['product']) . "'>";
                echo  $row['brand'] . " " . $row['product'];
                echo "</a><br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <!-- TODO: Transform each row into a link using a query string.
            Make sure that the link references this same page and that the
            query string has the brand/product info only (no price, qty, etc.)
        -->

        <hr/>
        <ul>
            <!-- TODO: display the contents of the cart here -->
            <?php 
            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $cartItem) {
                    echo "<li>" . htmlspecialchars($cartItem) . "</li>";
                }
            } else {
                echo "<li>Your cart is empty</li>";
            }
            ?>
        </ul>
    </body>
</html>
