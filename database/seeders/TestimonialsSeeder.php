<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'author_name'    => 'Sam Altman',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'OpenAI',
                'author_photo'   => 'testimonials/sam_altman.jpg',
                'quote'          => 'Ron Conway went so far above and beyond the call of duty that I\'m not even sure how to describe it. I am reasonably confident OpenAI would have fallen apart without his help. He worked around the clock for days until things were done — that is the SV Angel difference.',
                'order'          => 1,
            ],
            [
                'author_name'    => 'Guillermo Rauch',
                'author_title'   => 'Founder & CEO',
                'author_company' => 'Vercel',
                'author_photo'   => 'testimonials/guillermo_rauch.jpg',
                'quote'          => 'Since day one, SV Angel has rolled up their sleeves to support Vercel\'s growth. SV Angel has made some of our highest-caliber introductions to date and I can always rely on them for help. They are true partners in every sense of the word.',
                'order'          => 2,
            ],
            [
                'author_name'    => 'Ali Ghodsi',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Databricks',
                'author_photo'   => 'testimonials/ali_ghodsi.jpg',
                'quote'          => 'Our partnership with SV Angel has been a true testament to the power of aligned vision and shared values. Their unwavering support, strategic insights, and invaluable network have been instrumental in propelling Databricks forward and seizing new growth opportunities at every turn.',
                'order'          => 3,
            ],
            [
                'author_name'    => 'Julia Hartz',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Eventbrite',
                'author_photo'   => 'testimonials/julia_hartz.jpg',
                'quote'          => 'SV Angel is an incredible connector of talent and ideas. The strategic introductions and support they cultivate have helped countless leaders navigate their greatest challenges and biggest opportunities. I could not have built Eventbrite without their belief in us.',
                'order'          => 4,
            ],
            [
                'author_name'    => 'Florian Otto',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Cedar',
                'author_photo'   => 'testimonials/florian_otto.jpg',
                'quote'          => 'SV Angel is more than an investor — they are a trusted partner to me and Cedar. If I need advice, help or a sounding board, their team is always available to support us. Their network and judgment are unmatched in Silicon Valley.',
                'order'          => 5,
            ],
        ];

        foreach ($items as $i) {
            Testimonial::updateOrCreate(
                ['author_name' => $i['author_name']],
                array_merge($i, ['is_active' => true])
            );
        }
    }
}
