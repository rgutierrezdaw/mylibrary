<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Http\Traits\GetBooks;

class HomeController extends Controller
{
    use GetBooks;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = $this->getBooks();
        //return response()->json(['status'=>'ok','data'=>Book::all()], 200);
         return view('home')->with('books', $books);
    }
}
