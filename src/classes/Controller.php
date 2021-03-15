<?php

namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Model\Book;

class Controller
{
    public function routeBooks()
    {
        if (!Capsule::schema()->hasTable('books')) {
            Capsule::schema()->create('books', function ($table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->timestamps();
            });
            $book = new Book();
            $book->createBook('книга 1');
            $book->createBook('книга 2');
            $book->createBook('книга 3');
        }
        return new View ('books', ['books' => Book::all()]);
    }

    public function index()
    {
        return new View ('body', ['title' => 'Home Page']);
    }

    public function about()
    {
        return new View ('body', ['title' => 'About Page']);
    }
    public function authorization()
    {
        return new View ('auth', ['title' => 'авторизация']);
    }
}