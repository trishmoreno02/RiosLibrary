<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $keyword = $request->search;    //default search is by title
        $results = '';
        $borrowed = DB::table('borrow')->where('is_returned', 0)->select('book_id')->get();
        $books = array();
        foreach($borrowed as $b)
        {
            array_push($books, $b->book_id);
        }

        if($request->searchby == "author")
        {
            $results = Books::where('author', 'like', '%'.$keyword.'%')->whereNotIn('id', $books)->get();
        }
        else if($request->searchby == "genre")
        {
            $genre = $request->genre;
            if($keyword == '')
            {
                $results = Books::where('genre', $genre)->whereNotIn('id', $books)->get();
            }else{
                $results = Books::where('title', 'like', '%'.$keyword.'%')->where('genre', $genre)->whereNotIn('id', $books)->get();
            }
        }
        else if($request->searchby == "lib_sec")
        {
            $lib_sec = $request->lib_sec;
            if($keyword == '')
            {
                $results = Books::where('lib_sec', $lib_sec)->whereNotIn('id', $books)->get();
            }
            else{
                $results = Books::where('title', 'like', '%'.$keyword.'%')->where('lib_sec', $lib_sec)->whereNotIn('id', $books)->get();
            }
        }
        else if($keyword == '')
        {
            $results = Books::all()->whereNotIn('id', $books);
            return view('results')->with('results', $results);
        }
        else
        {
            $results = Books::where('title', 'like', '%'.$keyword.'%')->whereNotIn('id', $books)->get();
        }

        return view('results')->with('results', $results);
    }
}
