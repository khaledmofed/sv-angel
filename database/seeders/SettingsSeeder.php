<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name',         'value' => 'SV Angel',                                  'group' => 'general'],
            ['key' => 'site_tagline',       'value' => 'Advocates for founders.',                   'group' => 'general'],
            ['key' => 'footer_copyright',   'value' => '©2026 SV Angel',                           'group' => 'general'],
            ['key' => 'stats_projects',     'value' => '200',                                       'group' => 'general'],
            ['key' => 'stats_satisfaction', 'value' => '98',                                        'group' => 'general'],
            ['key' => 'stats_clients',      'value' => '120',                                       'group' => 'general'],
            ['key' => 'contact_address',    'value' => 'San Francisco, CA',                         'group' => 'contact'],
            ['key' => 'contact_email',      'value' => 'info@svangel.com',                          'group' => 'contact'],
            ['key' => 'contact_phone',      'value' => '',                                          'group' => 'contact'],
            ['key' => 'social_linkedin',    'value' => 'https://linkedin.com/company/sv-angel',     'group' => 'social'],
            ['key' => 'social_medium',      'value' => 'https://medium.com/sv-angel',               'group' => 'social'],
            ['key' => 'social_twitter',     'value' => 'https://twitter.com/sv_angel',              'group' => 'social'],
            ['key' => 'social_crunchbase',  'value' => 'https://crunchbase.com/organization/sv-angel', 'group' => 'social'],
            ['key' => 'custom_css',         'value' => '',                                          'group' => 'scripts'],
            ['key' => 'custom_js',          'value' => '',                                          'group' => 'scripts'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], ['value' => $s['value'], 'group' => $s['group']]);
        }
    }
}
