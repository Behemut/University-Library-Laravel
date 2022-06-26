<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Author extends Model
{
    static $rule = [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
    ];
    protected $perPage = 10;
    protected $fillable = ['name', 'surname'];

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id', 'id');
    }
}
