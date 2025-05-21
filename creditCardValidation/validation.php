<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}
include 'functions.php';

$cardNumber = isset($_POST['cardNumber']) ? test_input($_POST['cardNumber']) : "";
$expiry     = isset($_POST['expiry']) ? test_input($_POST['expiry']) : "";
$CVV        = isset($_POST['CVV']) ? test_input($_POST['CVV']) : "";

$errors = array();

//Reference: https://www.geeksforgeeks.org/php-ctype_digit-function/
// Validate that card number and CVV are numeric.
if (!ctype_digit($cardNumber)) {
    $errors[] = "Card number must be numeric.";
}
if (!ctype_digit($CVV)) {
    $errors[] = "CVV must be numeric.";
}

if (!empty($errors)) {
    foreach($errors as $error) {
        echo $error . "<br>";
    }
    echo "Please go back and enter valid credit card information.";
    exit();
}

// Process credit card payment simulation.
$result = credit_card_validation($cardNumber, $_SESSION['total']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Confirmation</title>
</head>
<body>
  <?php echo $result; ?>
</body>
</html>
