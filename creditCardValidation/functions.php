<?php
// Clean input data (trim, strip slashes, and convert special chars)
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Validate the credit card number and return a confirmation or error message.
// $total is the amount to be charged.
function credit_card_validation($card, $total) {
    // Check for a MasterCard (starts with 51-55, 16 digits)
    if (str_starts_with($card, "51") || str_starts_with($card, "52") ||
        str_starts_with($card, "53") || str_starts_with($card, "54") ||
        str_starts_with($card, "55")) 
    {
        if (strlen($card) == 16) {
            $endsWith = substr($card, -4);
            return "Your MASTERCARD ending $endsWith has been charged $$total";
        }
    }
    // Check for a Visa (starts with 4, 13 or 16 digits)
    elseif (str_starts_with($card, "4")) {
        if ( (strlen($card) == 13) || (strlen($card) == 16) ) {
            $endsWith = substr($card, -4);
            return "Your VISA ending $endsWith has been charged $$total";
        }
    }
    // Check for American Express (starts with 34 or 37, 15 digits)
    elseif (str_starts_with($card, "34") || str_starts_with($card, "37")) {
        if (strlen($card) == 15) {
            $endsWith = substr($card, -4);
            return "Your AMEX ending $endsWith has been charged $$total";
        }
    }
    return "Invalid card, your card has not been charged.";
}
?>
