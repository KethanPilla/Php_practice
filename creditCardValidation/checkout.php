<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
  <?php
  // Display the total amount
  echo 'Total to be paid: $' . number_format($_SESSION['total'], 2) . "<br><br>";
  ?>
  <form action="validation.php" method="POST">
      Card Number: <input type="text" name="cardNumber"><br>
      Expiry (MM/YY): <input type="text" name="expiry"><br>
      CVV: <input type="text" name="CVV"><br><br>
      <input type="submit" value="Pay">
  </form>
</body>
</html>
