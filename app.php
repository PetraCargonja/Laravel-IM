<?php

require __DIR__ . '/vendor/autoload.php';
$databaseConfig = require __DIR__ . '/config/database.php';

try {
    $connection = new mysqli(
        username: $databaseConfig['username'], 
        password: $databaseConfig['password'], 
        database: $databaseConfig['database']
    );
} catch (mysqli_sql_exception) {
    echo 'Connection failed!', PHP_EOL;
    return;
}

echo 'Connected!', PHP_EOL;
echo 'Server info: ', $connection->server_info, PHP_EOL;