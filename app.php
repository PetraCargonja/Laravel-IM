<?php

use App\Videostore\Entity\Genre;

require __DIR__ . '/vendor/autoload.php';
$databaseConfig = require __DIR__ . '/config/database.php';

try {
    $connection = new PDO(
        'mysql:dbname=' . $databaseConfig['database'],
        $databaseConfig['username'], 
        $databaseConfig['password'],
    );
} catch (Throwable $th) {
    echo 'Connection failed!', PHP_EOL;
    return;
}

// transaction in PDO
$connection->beginTransaction();

try {
    $nextId = $connection
        ->query('SELECT MAX(id_zanr) + 1 AS next_id FROM zanr')
        ->fetchColumn();

    $genres = ['Comedy', 'Drama', 'Action', 'Horror', 'Thriller', 'Sci-Fi', 'Documentary', 'Romance', 'Western', 'Animation', 'Musical', 'War', 'Crime', 'Mystery', 'Adventure', 'Fantasy', 'Family', 'History', 'Sport', 'Music', 'Biography', 'Short', 'Film-Noir', 'Talk-Show', 'News', 'Reality-TV', 'Game-Show', 'Adult', 'Lifestyle', 'Experimental', 'Erotica', 'Commercial', 'Test', 'Instructional', 'Industrial', 'Educational', 'Avant-Garde', 'Foreign', 'Uncategorized', 'Other', 'None', 'Unknown', 'Unspecified', 'Unsorted'];

    $genreToInsert = $genres[array_rand($genres)];

    // insert using query
    // $connection->query(
    //     "INSERT INTO zanr (id_zanr, naziv) VALUES ($nextId, '$genreToInsert')"
    // );

    // insert using prepared statement
    $statement = $connection->prepare(
        "INSERT INTO zanr (id_zanr, naziv) VALUES (:id, :naziv)"
    );

    $statement->execute([
        ':id' => $nextId,
        ':naziv' => $genreToInsert,
    ]);
} catch (\Throwable $th) {
    $connection->rollBack();
    return;
}

$connection->commit();

// $statement = $connection->query('SELECT * FROM zanr');
// $statement->setFetchMode(PDO::FETCH_CLASS, Genre::class);

// while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     var_dump($row);
// }

// while ($genre = $statement->fetch()) {
//     echo $genre->getInfo(), PHP_EOL;
// }

// foreach ($result->fetchAll() as $genre) {
//     echo "ID: {$genre['id_zanr']}, name: {$genre['naziv']}", PHP_EOL;
// }