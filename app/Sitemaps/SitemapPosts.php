<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Tags\Sitemap;

class SitemapPosts extends \Spatie\Sitemap\Sitemap
{
    public function generate()
    {
        $posts = DB::table('wp_posts')
            ->distinct()
            ->select('wp_posts.post_modified', 'wp_posts.post_type', 'wp_posts.post_name')
            ->where('wp_posts.post_type', '=', 'post')
            ->orderByDesc('wp_posts.post_modified')
            ->take(50)
            ->get();

        foreach ($posts as $post) {
            $this->add(
                Url::create('/' . $post->post_name)
                    ->setLastModificationDate($post->post_modified)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.9)
            );
        }
    }
}
