<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    //
    public function index($category, Request $request)
    {
        $page = $request->input('page') ? $request->input('page') : 1;
        $posts = Cache::remember("categoryPost" . $category . "page" . $page, '60', function () use ($category, $page) {
            return Category::getPostByCategory(strtolower($category))->paginate(10)->appends(['page' => $page]);
        });

        $title = env('TITLE');
        $meta_description = "Category Movie $category";
        $meta_keywords = "Nonton film kategori" . $category;
        return view('pages/search', [
            "title" => "$meta_keywords | $title",
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
            "posts" => $posts
        ]);
    }
}
