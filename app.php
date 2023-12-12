<?php

use App\Videostore\Entity\Genre;

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

$connection->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);


// transaction in mysqli
$connection->begin_transaction();

try {
    $nextId = $connection
        ->query('SELECT MAX(id_zanr) + 1 AS next_id FROM zanr')
        ->fetch_assoc()['next_id'];

    $genres = ['Comedy', 'Drama', 'Action', 'Horror', 'Thriller', 'Sci-Fi', 'Documentary', 'Romance', 'Western', 'Animation', 'Musical', 'War', 'Crime', 'Mystery', 'Adventure', 'Fantasy', 'Family', 'History', 'Sport', 'Music', 'Biography', 'Short', 'Film-Noir', 'Talk-Show', 'News', 'Reality-TV', 'Game-Show', 'Adult', 'Lifestyle', 'Experimental', 'Erotica', 'Commercial', 'Test', 'Instructional', 'Industrial', 'Educational', 'Avant-Garde', 'Foreign', 'Uncategorized', 'Other', 'None', 'Unknown', 'Unspecified', 'Unsorted'];

    $genreToInsert = $genres[array_rand($genres)];

    // insert using query
    // $connection->query(
    //     "INSERT INTO zanr (id_zanr, naziv) VALUES ($nextId, '$genreToInsert')"
    // );

    // insert using prepared statement
    $statement = $connection->prepare(
        "INSERT INTO zanr (id_zanr, naziv) VALUES (?, ?)"
    );

    $statement->bind_param('is', $nextId, $genreToInsert);
    $statement->execute();
} catch (\Throwable $th) {
    $connection->rollback();
    return;
}

$connection->commit();

// $result = $connection->query('SELECT * FROM zanr');

// while ($genre = $result->fetch_object(Genre::class)) {
//     echo $genre->getInfo(), PHP_EOL;
// }

// foreach ($result->fetch_object() as $genre) {
//     echo "ID: {$genre['id_zanr']}, name: {$genre['naziv']}", PHP_EOL;
// }