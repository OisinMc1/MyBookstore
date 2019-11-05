<?php
# @Date:   2019-10-24T12:51:48+401:00
# @Last modified time: 2019-11-05T12:38:21+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('role:user');
  }

    public function index()
    {
        $books = Book::all();

        return view('user.books.index')->with(['books' => $books ]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show')->with(['book' => $book]);
    }


}
