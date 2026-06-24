<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Principle;

class PrinciplesSeeder extends Seeder
{
    public function run(): void
    {
        $principles = [
            [
                'number'         => '01',
                'title'          => 'Sweat the Details',
                'description'    => 'Following John Wooden\'s philosophy about details. The team addresses crucial tasks immediately and thoroughly.',
                'quote_text'     => 'Ron Conway went so far above and beyond...without his help; he worked around the clock.',
                'quote_author'   => 'Sam Altman',
                'quote_position' => 'CEO, OpenAI',
                'order'          => 1,
            ],
            [
                'number'         => '02',
                'title'          => 'Advocate for Founders',
                'description'    => 'Founders come first. Support extends to leaders as complete humans and entrepreneurs.',
                'quote_text'     => 'His unwavering support, strategic insights, and invaluable network have been instrumental.',
                'quote_author'   => 'Ali Ghodsi',
                'quote_position' => 'CEO, Databricks',
                'order'          => 2,
            ],
            [
                'number'         => '03',
                'title'          => 'Nourish the Network',
                'description'    => 'Functioning as a "routing layer" reducing ecosystem friction, benefiting all founders.',
                'quote_text'     => 'SV Angel to be an incredible connector of talent and ideas...opening doors and creating opportunities.',
                'quote_author'   => 'Julia Hartz',
                'quote_position' => 'CEO, Eventbrite',
                'order'          => 3,
            ],
            [
                'number'         => '04',
                'title'          => 'Do the Right Thing',
                'description'    => 'Beyond profits—fostering inclusive communities with high standards and shared wisdom.',
                'quote_text'     => 'SV Angel is more than an investor - they are a trusted partner...not just the financial return.',
                'quote_author'   => 'Florian Otto',
                'quote_position' => 'CEO, Cedar',
                'order'          => 4,
            ],
            [
                'number'         => '05',
                'title'          => 'Show Up When It Matters',
                'description'    => 'Strategic support during inflection points: M&A, key hires, financing, communications.',
                'quote_text'     => 'I can always rely on them for help when I am solving my toughest challenges.',
                'quote_author'   => 'Guillermo Rauch',
                'quote_position' => 'CEO, Vercel',
                'order'          => 5,
            ],
        ];

        foreach ($principles as $p) {
            Principle::updateOrCreate(['number' => $p['number']], array_merge($p, ['is_active' => true]));
        }
    }
}
