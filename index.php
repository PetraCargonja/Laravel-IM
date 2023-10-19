<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['name'] = 'John Doe';

var_dump(
    $_SESSION
);