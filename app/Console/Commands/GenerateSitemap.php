<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $this->info('Generating sitemap...');
        
        SitemapGenerator::create('https://www.pixelburstdigital.com')
            ->writeToFile(public_path('sitemap.xml'));
            
        $this->info('Sitemap generated successfully!');
    }
} 