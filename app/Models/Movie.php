<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'film';

    protected $primaryKey = 'id_film';

    public $timestamps = false;

    protected $fillable = [
        'naziv',
        'godina',
        'id_zanr',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_zanr', 'id_zanr');
    }
}
