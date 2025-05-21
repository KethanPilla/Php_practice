<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tax and Total</title>
    </head>
    <body>
        <?php
        $taxRate = 9.5;
        echo "Sub-total: $" . number_format($_SESSION['totalPrice'], 2) . "<br>";
        $calTax = $_SESSION['totalPrice'] * ($taxRate / 100);
        echo "Tax: $" . number_format($calTax, 2) . "<br>";
        $_SESSION['total'] = $_SESSION['totalPrice'] + $calTax;
        echo "Total: $" . number_format($_SESSION['total'], 2) . "<br>";
        ?>
        <form action="products.php" method="GET">
            <button type="submit">Continue Shopping</button>
        </form>
        <form action="checkout.php" method="POST">
            <button type="submit">Proceed to Checkout</button>
        </form>
    </body>
</html>
