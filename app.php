<?php

if (empty($_GET)) {
    echo 'Nema podataka';
    die();
}

if (empty($_GET['name'])) {
    echo 'Nema imena';
    die();
}

echo 'Hello, ' . $_GET['name'];