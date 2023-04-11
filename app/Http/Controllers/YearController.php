<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function index($year)
    {
        $posts = Year::getPostByYear(strtolower($year))->paginate(10);
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
