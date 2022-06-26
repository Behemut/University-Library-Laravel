<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];
    protected $perPage = 10;

    public function genreBooks()
    {
        return $this->hasMany(GenreBook::class, 'genre_id', 'id');
    }
}
