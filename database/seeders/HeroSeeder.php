<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::updateOrCreate(['id' => 1], [
            'headline'    => 'Advocates<br>for founders.',
            'subheadline' => 'Digital Studio',
            'description' => 'The team has spent years supporting transformative companies through belief in unlocking potential. We invest long-term in founders as agents of positive change.',
            'cta_text'    => 'View our portfolio',
            'cta_url'     => '/portfolio',
            'video_url'   => 'https://www.youtube.com/watch?v=8oON21G1Bqg',
            'is_active'   => true,
        ]);
    }
}
