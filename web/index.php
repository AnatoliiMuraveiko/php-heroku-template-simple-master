<?php

//include 'form.html';


session_start();
if ($_SESSION['count'] <= 0) {
    include 'form.html';
} else {
    echo 'Привет';
    echo '<a href="index.php">Перейти</a>';
}

//echo $_SESSION['count'];