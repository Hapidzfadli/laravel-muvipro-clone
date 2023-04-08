<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TvShow;
use App\Models\Home;

class TvShowController extends Controller
{
    //
    public function index($postname)
    {
        $posts = TvShow::getTvDetail($postname);
        $rekomendasi = Home::getPostByCategory($posts['category'][0]);
        $popular = Home::getPostTrending()->take(3);
        if (!$posts) {
            abort(404);
        }
        return view('pages/streaming', [
            "title" => $posts['post_title'],
            "post" => $posts,
            "episode" => $posts['episode'],
            "rekomendasi" => $rekomendasi,
            "popular" => $popular
        ]);
    }
}
