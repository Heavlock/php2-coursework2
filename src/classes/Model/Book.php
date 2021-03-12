<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $guarded = [];
    protected $fillable = ['name'];

    public static function createBook($name)
    {
        return $book = Book::create(['name' => $name]);
    }
}