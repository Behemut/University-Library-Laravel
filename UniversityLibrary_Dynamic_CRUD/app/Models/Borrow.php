<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{

    protected $fillable = ['user_id', 'book_id', 'borrow_date', 'return_date','is_returned'];
    protected $perPage = 10;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }
}
