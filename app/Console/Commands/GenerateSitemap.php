<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $this->info('Generating sitemap...');
        
        SitemapGenerator::create('https://www.pixelburstdigital.com')
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === 'dashboard' || $url->segment(1) === 'profile') {
                    return;
                }
            })
            ->writeToFile(public_path('sitemap.xml'));
            
        $this->info('Sitemap generated successfully!');
    }
} 