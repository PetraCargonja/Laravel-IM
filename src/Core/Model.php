<?php

namespace App\Core;


abstract class Model
{
    public function findAll()
    {
        $connection = new \PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);

        $statement = $connection->query(
            "SELECT * FROM {$this->getTableName()}"
        );
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->getClassName());

        $rows = [];

        while ($row = $statement->fetch()) {
            $rows[] = $row;
        }

        return $rows;
    }

    abstract function getClassName(): string;

    abstract function getTableName(): string;
}