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



        return view('index', [
            "title" => "Indoseries2 21",
            'actions' => $action,
            'adventures' => Home::getPostByCategory('adventure'),
            'horror' => Home::getPostByCategory('horror'),
            'drama' => Home::getPostByCategory('drama'),
            'comedy' => Home::getPostByCategory('comedy'),
            'trending' => $trending,
            'tvshow' =>  $tvshow,
            "header" => $postHeader,
            "active" => 'home'
        ]);
    }
}
