<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    //
    public function index($category)
    {
        $posts = Cache::remember("categoryPost$category", '60', function () use ($category) {
            return Category::getPostByCategory(strtolower($category))->paginate(10);
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
