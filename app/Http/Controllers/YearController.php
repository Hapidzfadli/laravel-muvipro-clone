<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class YearController extends Controller
{
    public function index($year, Request $request)
    {
        $page = $request->input('page') ? $request->input('page') : 1;
        $posts = Cache::remember("yearPost" . $year . "page" . $page, '60', function () use ($year, $page) {
            return Year::getPostByYear(strtolower($year))->paginate(10)->appends(['page' => $page]);
        });
        $title = env('TITLE');
        $meta_description = "Nontan Movie Tahun $year";
        $meta_keywords = "Nonton film tahun" . $year;
        return view('pages/search', [
            "title" => "$meta_keywords | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "posts" => $posts
        ]);
    }
}
