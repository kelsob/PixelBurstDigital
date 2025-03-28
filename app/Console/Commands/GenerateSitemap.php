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
        
        $sitemap = SitemapGenerator::create('https://www.pixelburstdigital.com')
            ->getSitemap();

        // Add static pages
        $sitemap->add(Url::create('https://www.pixelburstdigital.com')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0));

        $sitemap->add(Url::create('https://www.pixelburstdigital.com/about')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8));

        $sitemap->add(Url::create('https://www.pixelburstdigital.com/services')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8));

        $sitemap->add(Url::create('https://www.pixelburstdigital.com/portfolio')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.8));

        $sitemap->add(Url::create('https://www.pixelburstdigital.com/contact')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.7));

        // Write the sitemap to file
        $sitemap->writeToFile(public_path('sitemap.xml'));
            
        $this->info('Sitemap generated successfully!');
    }
} 