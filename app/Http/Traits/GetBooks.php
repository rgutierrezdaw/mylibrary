<?php
namespace App\Http\Traits;

use App\Models\Book;

trait GetBooks{
    public function getBooks(){
        return $books = Book::all();
    }

}
