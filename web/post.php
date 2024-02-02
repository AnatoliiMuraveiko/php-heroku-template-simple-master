<?php

session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

if ($_SESSION['count'] >= 1) {
    $_SESSION['name'] = $_POST['name'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
}