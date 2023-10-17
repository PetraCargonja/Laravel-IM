<?php

if (empty($_GET)) {
    echo 'Nema podataka';
    die();
}

echo 'Hello, ' . $_GET['name'];