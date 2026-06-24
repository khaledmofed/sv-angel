<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrandLogo;

class BrandLogosSeeder extends Seeder
{
    public function run(): void
    {
        BrandLogo::truncate();

        $brands = [
            ['name' => 'Google',      'logo_image' => 'brands/google.png',      'website_url' => 'https://www.google.com/',       'order' => 1],
            ['name' => 'OpenAI',      'logo_image' => 'brands/openai.png',      'website_url' => 'https://www.openai.com',         'order' => 2],
            ['name' => 'Stripe',      'logo_image' => 'brands/stripe.png',      'website_url' => 'https://stripe.com/',            'order' => 3],
            ['name' => 'Databricks',  'logo_image' => 'brands/databricks.png',  'website_url' => 'https://www.databricks.com/',    'order' => 4],
            ['name' => 'Anthropic',   'logo_image' => 'brands/anthropic.png',   'website_url' => 'https://www.anthropic.com/',     'order' => 5],
            ['name' => 'Airbnb',      'logo_image' => 'brands/airbnb.png',      'website_url' => 'https://www.airbnb.com/',        'order' => 6],
            ['name' => 'Meta',        'logo_image' => 'brands/meta.png',        'website_url' => 'https://www.meta.com/',          'order' => 7],
            ['name' => 'Coinbase',    'logo_image' => 'brands/coinbase.png',    'website_url' => 'https://www.coinbase.com/',      'order' => 8],
            ['name' => 'Sierra',      'logo_image' => 'brands/sierra.png',      'website_url' => 'https://sierra.ai/',             'order' => 9],
            ['name' => 'ElevenLabs', 'logo_image' => 'brands/elevenlabs.png',  'website_url' => 'https://elevenlabs.io/',          'order' => 10],
            ['name' => 'Notion',      'logo_image' => 'brands/notion.png',      'website_url' => 'https://www.notion.so/',         'order' => 11],
            ['name' => 'DoorDash',    'logo_image' => 'brands/doordash.png',    'website_url' => 'https://www.doordash.com/',      'order' => 12],
            ['name' => 'Vercel',      'logo_image' => 'brands/vercel.png',      'website_url' => 'https://vercel.com/',            'order' => 13],
            ['name' => 'Cedar',       'logo_image' => 'brands/cedar.png',       'website_url' => 'https://www.cedar.com/',         'order' => 14],
        ];

        foreach ($brands as $b) {
            BrandLogo::create(array_merge($b, ['is_active' => true]));
        }
    }
}
