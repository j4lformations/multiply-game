<?php
if (!isset($_SESSION)) {
    session_start();
    session_destroy();
    $_SESSION = null;
    header('Location: http://localhost/multiply/pages/login.php');
    exit();
}