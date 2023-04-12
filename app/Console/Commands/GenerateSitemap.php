<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating the sitemap for the site';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = env('APP_URL');
        SitemapGenerator::create($url)->writeToFile(public_path('sitemap.xml'));
        $this->info('The sitemap has been generated');
    }
}
