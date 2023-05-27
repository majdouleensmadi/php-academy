<?php
session_start();

if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 0;
}

$_SESSION['visitor_count']++;

echo 'Number of visitors: ' . $_SESSION['visitor_count'];

session_write_close();
?>