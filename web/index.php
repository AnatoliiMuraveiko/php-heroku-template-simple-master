<?php

session_start();

//include 'form.html';
$_SESSION['count'] = isset($_SESSION['count'])? ++$_SESSION['count'] : 1;

if ($_SESSION['count'] <= 1) {
    include 'form.html';
} else {
    echo 'Привет';
    echo '<a href="exit.php">Перейти</a>';
}

//echo $_SESSION['count'];