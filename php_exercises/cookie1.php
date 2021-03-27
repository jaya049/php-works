<?php

$cookie_name = "user";
$cookie_value = "Limy";
setcookie($cookie_name, $cookie_value, time() + 10, "/"); // 86400 = 1 day

print_r($_COOKIE);
?>