<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name',            'value' => 'SV Angel',                                               'group' => 'general'],
            ['key' => 'site_tagline',          'value' => 'Advocates for founders.',                                'group' => 'general'],
            ['key' => 'site_logo',             'value' => '/assets/img/logo/sva-color.png',                        'group' => 'general'],
            ['key' => 'site_logo_footer',      'value' => '/assets/img/logo/sva-footer.png',                       'group' => 'general'],
            ['key' => 'footer_copyright',      'value' => '©2026 SV Angel',                                        'group' => 'general'],
            ['key' => 'stat_funded',                'value' => '599.4',  'group' => 'general'],
            ['key' => 'stat_investments_count',  'value' => '1572',   'group' => 'general'],
            ['key' => 'stat_funds_raised',       'value' => '11',     'group' => 'general'],
            ['key' => 'stat_diversity_investments','value' => '290',  'group' => 'general'],
            ['key' => 'stat_exits',              'value' => '513',    'group' => 'general'],
            ['key' => 'stat_lead_investments',   'value' => '35',     'group' => 'general'],
            ['key' => 'stat_ai_fintech_crypto',  'value' => '100',    'group' => 'general'],
            ['key' => 'stat_other_sectors',      'value' => '1472',   'group' => 'general'],
            ['key' => 'mission_title',         'value' => 'Built on principle',                                     'group' => 'mission'],
            ['key' => 'mission_headline',      'value' => 'Advocates for founders.',                                'group' => 'mission'],
            ['key' => 'mission_description',   'value' => 'We have spent decades supporting transformative companies — investing long-term in founders as agents of positive change.', 'group' => 'mission'],
            ['key' => 'mission_video_url',     'value' => 'https://www.youtube.com/watch?v=DEB9C3TAKhA',           'group' => 'mission'],
            ['key' => 'mission_bg_image',      'value' => '/storage/uploads/mission/sVAEo1T5e0FxErd9qr72oYgxNFlAfQYkMsRoyFI7.png', 'group' => 'mission'],
            ['key' => 'mission_video_thumb',   'value' => '/storage/uploads/mission/cBBRJCaTubHlJCXUFcnqXQttMb1Xj3tu4ZAN1K25.png', 'group' => 'mission'],
            ['key' => 'contact_address',       'value' => 'San Francisco, CA',                                      'group' => 'contact'],
            ['key' => 'contact_email',         'value' => 'info@svangel.com',                                       'group' => 'contact'],
            ['key' => 'contact_phone',         'value' => '',                                                       'group' => 'contact'],
            ['key' => 'social_linkedin',       'value' => 'https://www.linkedin.com/company/sv-angel/',             'group' => 'social'],
            ['key' => 'social_medium',         'value' => 'https://medium.com/sv-angel',                            'group' => 'social'],
            ['key' => 'social_twitter',        'value' => 'https://twitter.com/sv_angel',                           'group' => 'social'],
            ['key' => 'social_crunchbase',     'value' => 'https://www.crunchbase.com/organization/sv-angel',       'group' => 'social'],
            ['key' => 'custom_css',            'value' => '',                                                       'group' => 'scripts'],
            ['key' => 'custom_js',             'value' => '',                                                       'group' => 'scripts'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], ['value' => $s['value'], 'group' => $s['group']]);
        }
    }
}
