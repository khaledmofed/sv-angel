<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostsSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title'=>'Crafting the Design for Beyond the Screen Digital Products Marketplace','excerpt'=>'Explore how thoughtful design decisions shape digital product marketplaces that stand out in a crowded market.','author'=>'Andy Styles','read_time'=>'5 mins','published_at'=>'2025-03-07'],
            ['title'=>'Why Mobile-First Design is Crucial for Modern Websites','excerpt'=>'In a world where mobile traffic dominates, designing for mobile first is no longer optional — it is essential.','author'=>'Andy Styles','read_time'=>'5 mins','published_at'=>'2025-03-07'],
            ['title'=>'Pixel Playground creative studio Claims Site of the Week at Awwwards!','excerpt'=>'Our latest project was recognized by Awwwards as Site of the Week, celebrating innovation in web design and development.','author'=>'Andy Styles','read_time'=>'5 mins','published_at'=>'2025-03-07'],
        ];

        foreach ($posts as $p) {
            BlogPost::updateOrCreate(['slug' => Str::slug($p['title'])], array_merge($p, [
                'slug'   => Str::slug($p['title']),
                'status' => 'published',
            ]));
        }
    }
}
