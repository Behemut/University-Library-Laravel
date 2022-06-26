<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreBook extends Model
{
    protected $fillable = ['genre_id', 'book_id'];
    protected $perPage = 10;

    public function genre()
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }


    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

}
