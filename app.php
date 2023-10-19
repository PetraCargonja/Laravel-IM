<?php

if (empty($_FILES['file'])) {
    die('Niste odabrali datoteku!');
}

$file = $_FILES['file'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    die('Došlo je do greške prilikom prijenosa datoteke!');
}

$mimeTypes = [
    'png' => 'image/png',
    'jpe' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif',
    'bmp' => 'image/bmp',
    'ico' => 'image/vnd.microsoft.icon',
    'tiff' => 'image/tiff',
    'tif' => 'image/tiff',
    'svg' => 'image/svg+xml',
    'svgz' => 'image/svg+xml'
];

if (!in_array($file['type'], $mimeTypes)) {
    die('Datoteka nije slika!');
}

$uploadDirectory = __DIR__ . '/uploads/';

if (!file_exists($uploadDirectory)) {
    if (!mkdir($uploadDirectory)) {
        die('Došlo je do greške prilikom kreiranja direktorija!');
    }
}

$uploadFileName = $uploadDirectory . basename($file['name']);

if (file_exists($uploadFileName)) {
    die('Datoteka već postoji!');
}

if (!move_uploaded_file($file['tmp_name'], $uploadFileName)) {
    die('Došlo je do greške prilikom spremanja datoteke!');
}

echo 'Datoteka je uspješno spremljena!';