<?php

namespace App\Http\Controllers;

use App\Models\TvShow;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function index(Request $request)
    {
        $episode = TvShow::getPostEpisode($request->post_id);
        return $episode;
    }
}
