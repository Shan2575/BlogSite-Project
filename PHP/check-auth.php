<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_COOKIE['authenticated'])) {
    header('Location: ./LoginSignup/login.php');
}
