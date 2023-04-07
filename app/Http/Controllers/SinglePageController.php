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

        if (!$post) {
            abort(404);
        }

        return view('pages/streaming', [
            "title" => $post['post_title'],
            "post" => $post,
            "rekomendasi" => $rekomendasi,
            "popular" => $popular
        ]);
    }
}
