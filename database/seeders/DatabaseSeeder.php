<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            SettingsSeeder::class,
            HeroSeeder::class,
            PrinciplesSeeder::class,
            TeamMembersSeeder::class,
            PortfolioCompaniesSeeder::class,
            BrandLogosSeeder::class,
            TestimonialsSeeder::class,
            AwardsSeeder::class,
            ServicesSeeder::class,
            ProcessStepsSeeder::class,
            FaqsSeeder::class,
            BlogPostsSeeder::class,
            AboutStoriesSeeder::class,
        ]);
    }
}
