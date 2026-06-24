<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrandLogo;

class BrandLogosSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Google',      'website_url' => 'https://www.google.com/',       'order' => 1],
            ['name' => 'OpenAI',      'website_url' => 'https://www.openai.com',         'order' => 2],
            ['name' => 'Stripe',      'website_url' => 'https://stripe.com/',            'order' => 3],
            ['name' => 'Databricks',  'website_url' => 'https://www.databricks.com/',    'order' => 4],
            ['name' => 'Anthropic',   'website_url' => 'https://www.anthropic.com/',     'order' => 5],
            ['name' => 'Airbnb',      'website_url' => 'https://www.airbnb.com/',        'order' => 6],
            ['name' => 'Meta',        'website_url' => 'https://www.meta.com/',          'order' => 7],
            ['name' => 'Coinbase',    'website_url' => 'https://www.coinbase.com/',      'order' => 8],
            ['name' => 'Sierra',      'website_url' => 'https://sierra.ai/',             'order' => 9],
            ['name' => 'ElevenLabs', 'website_url' => 'https://elevenlabs.io/',          'order' => 10],
            ['name' => 'Notion',      'website_url' => 'https://www.notion.so/',         'order' => 11],
            ['name' => 'DoorDash',    'website_url' => 'https://www.doordash.com/',      'order' => 12],
            ['name' => 'Vercel',      'website_url' => 'https://vercel.com/',            'order' => 13],
            ['name' => 'Cedar',       'website_url' => 'https://www.cedar.com/',         'order' => 14],
        ];

        foreach ($brands as $b) {
            BrandLogo::updateOrCreate(
                ['name' => $b['name']],
                array_merge($b, ['is_active' => true])
            );
        }
    }
}
