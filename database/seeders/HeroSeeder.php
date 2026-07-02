<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::updateOrCreate(['id' => 1], [
            'title'       => 'SV Angel',
            'headline'    => 'Advocates for founders.',
            'subheadline' => 'Digital Studio',
            'description' => 'The team has spent years supporting transformative companies through belief in unlocking potential. We invest long-term in founders as agents of positive change.',
            'cta_text'    => 'View our portfolio',
            'cta_url'     => '/portfolio',
            'video_url'   => 'https://www.youtube.com/watch?v=8oON21G1Bqg',
            'is_active'   => true,
            'translations' => [
                'ja' => [
                    'title'       => 'SVエンジェル',
                    'headline'    => '創業者のための<br>アドボケイト。',
                    'description' => 'チームは、潜在力を解き放つことへの信念のもと、変革的な企業を支援することに何年もを費やしてきました。私たちは、ポジティブな変化の担い手として、創業者に長期的に投資します。',
                    'cta_text'    => 'ポートフォリオを見る',
                ],
                'ko' => [
                    'title'       => 'SV 엔젤',
                    'headline'    => '창업자를 위한<br>든든한 파트너.',
                    'description' => '팀은 잠재력을 이끌어내는 믿음을 바탕으로 수년간 변혁적인 기업을 지원해 왔습니다. 우리는 긍정적 변화의 주체인 창업자에게 장기적으로 투자합니다.',
                    'cta_text'    => '포트폴리오 보기',
                ],
                'es' => [
                    'headline'    => 'Defensores<br>de los fundadores.',
                    'description' => 'El equipo ha pasado años apoyando a empresas transformadoras con la creencia de desbloquear el potencial. Invertimos a largo plazo en fundadores como agentes de cambio positivo.',
                    'cta_text'    => 'Ver nuestro portafolio',
                ],
                'zh-TW' => [
                    'headline'    => '創業者的<br>守護者。',
                    'description' => '團隊多年來一直在相信釋放潛力的信念下支持具有變革性的企業。我們長期投資於作為正向變革推動者的創業者。',
                    'cta_text'    => '查看我們的投資組合',
                ],
                'vi' => [
                    'headline'    => 'Người ủng hộ<br>các nhà sáng lập.',
                    'description' => 'Đội ngũ đã dành nhiều năm hỗ trợ các công ty có tính biến đổi với niềm tin vào việc khai phóng tiềm năng. Chúng tôi đầu tư dài hạn vào các nhà sáng lập như những tác nhân của sự thay đổi tích cực.',
                    'cta_text'    => 'Xem danh mục đầu tư',
                ],
            ],
        ]);
    }
}
