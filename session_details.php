<?php
session_start();
$logged_in = $_SESSION['logged_in'] ?? false;
$email = "batman@batcave.com";
$pass = "brucewayne";

function login() {
    session_regenerate_id(true);
    $_SESSION['logged_in'] = true;
}

function logout() {
    $_SESSION = [];
    session_destroy();
}