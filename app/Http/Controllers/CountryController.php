<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    public function index($country)
    {
        $posts = Cache::remember("countryPost$country", '60', function () use ($country) {
            return Country::getPostByCountry(strtolower($country))->paginate(10);
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
