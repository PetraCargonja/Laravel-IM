<?php

if (empty($_POST)) {
    echo 'Nema podataka za obradu';
    die();
}

if (!isset($_POST['username']) || !isset($_POST['lastname'])) {
    echo 'Niste unijeli sve podatke';
    die();
}

echo "ime: {$_POST['username']}, prezime: {$_POST['lastname']}";