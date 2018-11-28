<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function borrow(Request $request)
    {
        $book_id = $request->book_id;
        DB::table('borrow')->insert(['book_id' => $book_id, 'user_id' => Auth::id(), 'return_date' => $request->return, 'is_returned' => 0]);

        return redirect('/home');
    }
}
