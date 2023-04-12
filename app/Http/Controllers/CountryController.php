<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    public function index($country, Request $request)
    {
        $page = $request->input('page') ? $request->input('page') : 1;
        $posts = Cache::remember("countryPost" . $country . "page" . $page, '60', function () use ($country, $page) {
            return Country::getPostByCountry(strtolower($country))->paginate(10)->appends(['page' => $page]);
        });

        $title = env('TITLE');
        $meta_description = "Nonton Movie Negara $country";
        $meta_keywords = "Nonton film Negara" . $country;
        return view('pages/search', [
            "title" => "$meta_keywords | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "posts" => $posts
        ]);
    }
}
