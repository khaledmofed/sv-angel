<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['quote'=>'Working with this team has been a game-changer. Their creativity and attention to detail helped our brand truly stand out.','author_name'=>'Jane Doe','author_title'=>'CEO','author_company'=>'BrightWave','order'=>1],
            ['quote'=>'Their strategy and execution exceeded our expectations. We saw immediate growth and improved engagement across our platforms.','author_name'=>'Michael Smith','author_title'=>'Marketing Director','author_company'=>'TechNova','order'=>2],
            ['quote'=>'Professional, creative, and reliable. They transformed our online presence and helped us connect with our audience like never before.','author_name'=>'Sarah Lee','author_title'=>'Founder','author_company'=>'PixelCraft','order'=>3],
        ];
        foreach ($items as $i) {
            Testimonial::updateOrCreate(['author_name' => $i['author_name']], array_merge($i, ['is_active' => true]));
        }
    }
}
