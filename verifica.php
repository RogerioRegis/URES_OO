<?php

session_start();

if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {

    session_destroy();

    unset($_SESSION['login']);
    unset($_SESSION['senha']);

    header('location: login.php');
}