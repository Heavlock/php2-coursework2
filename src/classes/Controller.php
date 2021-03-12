<?php

namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Model\Book;

class Controller
{
    public $uri;
    public $page;

    public function __construct($uri = '', $page = '')
    {
        $this->uri = $uri;
        $this->page = $page;
    }

    public function routBooks()
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
        $books = Book::all();
        echo '<pre>';
        foreach ($books as $book) {
            echo $book->name . PHP_EOL;
        }
        echo '</pre>';
    }

    public function index(){
        return 'Home Page';
    }
    public function about(){
        return 'About Page';
    }
}