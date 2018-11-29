<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function addBook(Request $request)
    {
        $book = new Books;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->genre = $request->genre;
        $book->lib_section = $request->lib_section;
        $book->save();
        return redirect('/admin/dashboard');
    }
}
