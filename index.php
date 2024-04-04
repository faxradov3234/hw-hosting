<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
    echo 'Привет, ' . $_SESSION['username'] . PHP_EOL;
    echo "</br><a href='exit.php'>Выйти</a>";
} 
else {
    include 'form.html';
}