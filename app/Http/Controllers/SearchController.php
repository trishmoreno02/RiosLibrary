<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $keyword = $request->search;    //default search is by title
        $results = '';

        if($request->searchby == "author")
        {
            $results = Books::where('author', 'like', '%'.$keyword.'%')->get();
        }
        else if($request->searchby == "genre")
        {
            $genre = $request->genre;
            if($keyword == '')
            {
                $results = Books::where('genre', $genre)->get();
            }else{
                $results = Books::where('title', 'like', '%'.$keyword.'%')->where('genre', $genre)->get();
            }
        }
        else if($request->searchby == "lib_sec")
        {
            $lib_sec = $request->lib_sec;
            if($keyword == '')
            {
                $results = Books::where('lib_sec', $lib_sec)->get();
            }
            else{
                $results = Books::where('title', 'like', '%'.$keyword.'%')->where('lib_sec', $lib_sec)->get();
            }
        }
        else if($keyword == '')
        {
            $results = Books::all();
            return view('results')->with('results', $results);
        }
        else
        {
            $results = Books::where('title', 'like', '%'.$keyword.'%')->get();
        }

        return view('results')->with('results', $results);
    }
}
