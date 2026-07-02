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
            ['key' => 'footer_about',          'value' => 'SV Angel is a seed fund helping founders build great companies since 1992.',                        'group' => 'general'],
            ['key' => 'footer_about_ja',       'value' => 'SVエンジェルは1992年以来、創業者が偉大な企業を築くことを支援するシードファンドです。',              'group' => 'general'],
            ['key' => 'footer_about_ko',       'value' => 'SV Angel은 1992년 이후 창업자들이 위대한 기업을 만들도록 돕는 시드 펀드입니다.',                 'group' => 'general'],
            ['key' => 'footer_about_es',       'value' => 'SV Angel es un fondo semilla que ayuda a los fundadores a construir grandes empresas desde 1992.',  'group' => 'general'],
            ['key' => 'footer_about_zh-TW',    'value' => 'SV Angel 自 1992 年以來，是一個幫助創業者建立偉大公司的種子基金。',                                 'group' => 'general'],
            ['key' => 'footer_about_vi',       'value' => 'SV Angel là quỹ đầu tư hạt giống giúp các nhà sáng lập xây dựng những công ty vĩ đại từ năm 1992.', 'group' => 'general'],
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
            ['key' => 'mission_description',      'value' => 'We have spent decades supporting transformative companies — investing long-term in founders as agents of positive change.',       'group' => 'mission'],
            ['key' => 'mission_description_ja',   'value' => '私たちは、ポジティブな変化の担い手として創業者に長期的に投資しながら、数十年にわたり変革的な企業を支援してきました。',                                    'group' => 'mission'],
            ['key' => 'mission_description_ko',   'value' => '우리는 긍정적 변화의 주체인 창업자에게 장기적으로 투자하면서 수십 년간 변혁적인 기업을 지원해 왔습니다.',                                                 'group' => 'mission'],
            ['key' => 'mission_description_es',   'value' => 'Hemos pasado décadas apoyando a empresas transformadoras, invirtiendo a largo plazo en fundadores como agentes de cambio positivo.',              'group' => 'mission'],
            ['key' => 'mission_description_zh-TW','value' => '數十年來，我們一直支持具有變革性的企業，長期投資於作為正向變革推動者的創業者。',                                                                         'group' => 'mission'],
            ['key' => 'mission_description_vi',   'value' => 'Chúng tôi đã dành hàng thập kỷ hỗ trợ các công ty có tính biến đổi — đầu tư dài hạn vào các nhà sáng lập như những tác nhân của sự thay đổi tích cực.', 'group' => 'mission'],
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
