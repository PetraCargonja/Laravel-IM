<?php

namespace App\Models;

use App\Core\Model;

class Genre extends Model
{
    public function getClassName(): string
    {
        return self::class;
    }

    public function getTableName(): string
    {
        return 'zanr';
    }
}