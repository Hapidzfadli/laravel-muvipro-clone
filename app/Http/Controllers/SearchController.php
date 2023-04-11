<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');
        $title = env('TITLE');
        $meta_description = "Search Movie $search";
        $meta_keywords = $search;
        $posts = Search::getPostsBySearch($search)->paginate(10);



        return view('pages/search', [
            "title" => "$meta_keywords | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "posts" => $posts
        ]);
    }
}
