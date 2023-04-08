<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $action = Home::getPostByCategory('action');
        $trending = Home::getPostTrending();
        $tvshow = Home::getTvShow();
        $postHeader = Home::getPostHeader();
        $title = "Indoseries21";
        $latest = Home::getPost();
        $meta_description = "$title adalah sebuah situs atau website khusus tempat untuk nonton movie streaming secara online serta download film keluaran terbaru dari luar negeri";
        $meta_keywords = "$title | Website Nonton dan Download Film Terbaru";

        // dd($action);

        return view('index', [
            "title" => "$title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            'actions' => $action,
            'adventures' => Home::getPostByCategory('adventure'),
            'horror' => Home::getPostByCategory('horror'),
            'drama' => Home::getPostByCategory('drama'),
            'comedy' => Home::getPostByCategory('comedy'),
            'popular' => Home::getPostByCategory('popular'),
            'trending' => $trending,
            'tvshow' =>  $tvshow,
            "header" => $postHeader,
            'latest' => $latest,
            "active" => 'home'
        ]);
    }
}
