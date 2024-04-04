<?php
session_start();
unset($_SESSION["username"]);
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
header("Location:" . $protocol . $_SERVER["HTTP_HOST"]);
exit;
