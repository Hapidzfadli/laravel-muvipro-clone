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

        $postTitle = $posts['post_title'];

        $string = $posts['post_content'];
        $words = str_word_count($string, 1);
        $words = array_slice($words, 0, 20);

        $title = "Indoseries21";
        $meta_description = implode(' ', $words);
        $meta_keywords = isset($posts['meta_post']['_yoast_wpseo_focuskw']) ? $posts['meta_post']['_yoast_wpseo_focuskw'] : $posts['post_title'];
        return view('pages/streaming', [
            "title" => "Nonton dan Download Film Series $postTitle 480p 720p 1080p | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "post" => $posts,
            "episode" => $posts['episode'],
            "rekomendasi" => $rekomendasi,
            "popular" => $popular
        ]);
    }
}
