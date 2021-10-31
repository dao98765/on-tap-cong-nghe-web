<?php
    session_start();
    include '../partials-front/header.php';
    if(isset($_SESSION['loginSuccess'])) {
        unset($_SESSION['loginSuccess']);
        header("Location: ./login.php");
    }
?>