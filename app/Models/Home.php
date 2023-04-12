<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Home extends Model
{
    use HasFactory;

    public static function getPost()
    {
        $posts = Cache::remember('posts', 60, function () {
            return DB::table('wp_posts')
                ->distinct()
                ->select('wp_posts.post_title', 'wp_posts.post_date', 'wp_posts.post_type', 'wp_posts.post_name', 'wp_postmeta.meta_value')
                ->where('wp_posts.post_type', '=', 'post')
                ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                ->where('wp_postmeta.meta_key', '=', 'IDMUVICORE_Poster')
                ->orderByDesc('wp_posts.post_date')
                ->take(15)
                ->get();
        });

        return $posts;
    }


    public static function getPostByCategory($category)
    {
        $posts = Cache::remember('category' . $category, 1140, function () use ($category) {
            return DB::table('wp_terms')
                ->distinct()
                ->where('wp_terms.name', '=', $category)
                ->join('wp_term_relationships', 'wp_terms.term_id', '=', 'wp_term_relationships.term_taxonomy_id')
                ->join('wp_posts', 'wp_term_relationships.object_id', '=', 'wp_posts.ID')
                ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                ->select('wp_posts.post_title', 'wp_posts.post_name', 'wp_postmeta.meta_value', 'wp_posts.post_type', 'wp_posts.post_date')
                ->where('wp_postmeta.meta_key', '=', 'IDMUVICORE_Poster')
                ->orderByDesc('wp_posts.post_date')
                ->take(15)
                ->get();
        });
        return $posts;
    }

    public static function getPostTrending()
    {
        $posts = Cache::remember('trending', 1140, function () {
            return DB::table('wp_posts')
                ->distinct('id')
                ->select('wp_posts.post_title', 'wp_post_views.count', 'wp_posts.post_type', 'wp_posts.post_name', 'wp_postmeta.meta_value')
                ->join('wp_post_views', 'wp_posts.ID', '=', 'wp_post_views.id')
                ->where('wp_posts.post_type', '=', 'post')
                ->where('wp_post_views.type', '=', '4')
                ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                ->where('wp_postmeta.meta_key', '=', 'IDMUVICORE_Poster')
                ->whereBetween('wp_posts.post_date', [Carbon::now()->subMonth(1), Carbon::now()])
                ->orderByDesc('wp_post_views.count')
                ->take(15)
                ->get();
        });

        return $posts;
    }
    public static function getTvShow()
    {
        $posts = Cache::remember('tvshow', 1440, function () {
            return DB::table('wp_posts')
                ->distinct()
                ->select('wp_posts.post_title', 'wp_posts.post_date', 'wp_posts.post_name', 'wp_postmeta.meta_value')
                ->where('wp_posts.post_type', '=', 'tv')
                ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                ->where('wp_postmeta.meta_key', '=', 'IDMUVICORE_Poster')
                ->orderByDesc('wp_posts.post_date')
                ->take(15)
                ->get();
        });
        return $posts;
    }
    public static function getPostHeader()
    {
        if (Cache::has('dataTmdb')) {
            $result = Cache::get('dataTmdb');
        } else {
            $posts = DB::table('wp_posts')
                ->distinct()
                ->select('wp_posts.post_type', 'wp_post_views.count', 'wp_postmeta.meta_value', 'wp_posts.post_name')
                ->join('wp_post_views', 'wp_posts.ID', '=', 'wp_post_views.id')
                ->where('wp_post_views.type', '=', '4')
                ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                ->where('wp_postmeta.meta_key', '=', 'IDMUVICORE_imdbID')
                ->whereBetween('wp_posts.post_date', [Carbon::now()->subMonth(1), Carbon::now()])
                ->orderByDesc('wp_post_views.count')
                ->take(5)
                ->get();

            $result = collect([]);
            $posts->each(function ($item, $index) use ($result) {
                if ($item->meta_value != "null") {
                    $type = 'movie';
                    if ($item->post_type == 'post') {
                        $type = 'movie';
                    }
                    $url = "https://api.themoviedb.org/3/$type/$item->meta_value?api_key=3562d8d34cd7ad25b94e11489290b8a3";
                    // Mengambil data dari API
                    $data = file_get_contents($url);
                    $data = json_decode($data, true);
                    $data['post_name'] = $item->post_name;
                    $result->push($data);
                }
            });
            Cache::put('dataTmdb', $result, now()->addHours(6));
        }


        return $result;
    }
}
