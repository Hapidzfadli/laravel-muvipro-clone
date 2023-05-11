<?php

namespace App\Http\Controllers;

use App\Models\SinglePage;
use App\Models\Home;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index($postname)
    {
        $post = SinglePage::getPostDetail($postname);
        $rekomendasi = Home::getPostByCategory($post['category'][0]);
        $popular = Home::getPostTrending()->take(3);

        $string = $post['post_content'];
        $words = str_word_count($string, 1);
        $words = array_slice($words, 0, 20);

        $postTitle = $post['post_title'];

        $title = env('TITLE');
        $meta_description = implode(' ', $words);
        $meta_keywords = isset($post['meta_post']['_yoast_wpseo_focuskw']) ? $post['meta_post']['_yoast_wpseo_focuskw'] : $post['post_title'];

        if (!$post) {
            abort(404);
        }

        return view('pages/streaming', [
            "title" => "Nonton dan Download Film $postTitle | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "post" => $post,
            "rekomendasi" => $rekomendasi,
            "popular" => $popular
        ]);
    }
}
