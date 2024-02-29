<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'zanr';

    protected $primaryKey = 'id_zanr';

    public $timestamps = false;

    public function movies()
    {
        return $this->hasMany(Movie::class, 'id_zanr', 'id_zanr');
    }
}
