<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['title', 'author_id','year','description'];
    protected $perPage = 10;

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function genreBooks()
    {
        return $this->hasMany(GenreBook::class, 'book_id', 'id');
    }

    public function borrows(){
        return $this->hasMany(Borrow::class, 'book_id', 'id');
    }



}
