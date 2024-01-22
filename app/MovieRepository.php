<?php

namespace App;

class MovieRepository
{
    public function __construct(
        private DatabaseConnectionInterface $databaseConnection,
        private DatabaseConnectionInterface $databaseConnection2
        )
    {}

    public function getAll()
    {
        $this->databaseConnection->connect();

        return [
            'The Shawshank redemption',
            'The Godfather',
            'The Godfather II',
        ];
    }
}