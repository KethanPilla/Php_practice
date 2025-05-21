<?php
session_start();

// Initialize cart if it doesn't exist.
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Collect posted product data.
$product = array(
    'model'    => $_POST['model'],
    'storage'  => $_POST['storage'],
    'quantity' => $_POST['quantity']
);

// Determine the base price based on model.
if ($product['model'] == "16 Pro") {
    $basePrice = 999.00;
} elseif ($product['model'] == "16 Plus") {
    $basePrice = 899.00;
} else {
    $basePrice = 799.00;
}

// Adjust price for storage upgrades.
if ($product['storage'] == "256GB") {
    $basePrice += 100;
} elseif ($product['storage'] == "512GB") {
    $basePrice += 200;
}

/* Reference: https://www.w3schools.com/php/func_var_is_numeric.asp */ 
if(is_numeric($product['quantity'])) {
    $quantity = $product['quantity'];
} else {
    $quantity = 0;
}
$product['price'] = $basePrice * $quantity;
$product['quantity'] = $quantity;

// Add product to session cart.
$_SESSION['cart'][] = $product;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
</head>
<body>
    <h1>Order Summary</h1>
    <?php
    // Initialize total price.
    $_SESSION['totalPrice'] = 0;
    
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $item) {
            echo "<h2>Item " . ($index + 1) . ":</h2>";
            echo "Model: " . $item['model'] . "<br>";
            echo "Storage: " . $item['storage'] . "<br>";
            echo "Quantity: " . $item['quantity'] . "<br>";
            echo "Sub Total: $" . number_format($item['price'], 2) . "<br><br>";
            $_SESSION['totalPrice'] += $item['price'];
        }
    } else {
        echo "Your cart is empty.";
    }
    ?>
    <form action="products.php" method="GET">
        <button type="submit">Buy Another Product</button>
    </form>
    <form action="taxPage.php" method="POST">
        <button type="submit">Proceed</button>
    </form>
</body>
</html>
