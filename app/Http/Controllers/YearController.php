<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class YearController extends Controller
{
    public function index($year)
    {
        $posts = Cache::remember("yearPost$year", '60', function () use ($year) {
            return Year::getPostByYear(strtolower($year))->paginate(10);
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
