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
                'translations'   => [
                    'ja' => ['title' => '細部にこだわる', 'description' => 'ジョン・ウッデンの細部へのこだわり哲学に倣い、チームは重要な課題に即座かつ徹底的に取り組みます。'],
                    'ko' => ['title' => '세부사항에 집중하라', 'description' => '존 우든의 철학에 따라, 팀은 중요한 과제를 즉시 그리고 철저하게 처리합니다.'],
                    'es' => ['title' => 'Cuidar los detalles', 'description' => 'Siguiendo la filosofía de John Wooden sobre los detalles. El equipo aborda las tareas cruciales de manera inmediata y exhaustiva.'],
                    'zh-TW' => ['title' => '注重細節', 'description' => '秉承約翰·伍登的細節哲學，團隊對關鍵任務立即且徹底地處理。'],
                    'vi' => ['title' => 'Chú trọng từng chi tiết', 'description' => 'Theo triết lý của John Wooden về chi tiết. Đội ngũ giải quyết các nhiệm vụ quan trọng ngay lập tức và kỹ lưỡng.'],
                ],
            ],
            [
                'number'         => '02',
                'title'          => 'Advocate for Founders',
                'description'    => 'Founders come first. Support extends to leaders as complete humans and entrepreneurs.',
                'quote_text'     => 'His unwavering support, strategic insights, and invaluable network have been instrumental.',
                'quote_author'   => 'Ali Ghodsi',
                'quote_position' => 'CEO, Databricks',
                'order'          => 2,
                'translations'   => [
                    'ja' => ['title' => '創業者を守る', 'description' => '創業者が最優先。サポートは、完全な人間であり起業家であるリーダーたちにまで及びます。'],
                    'ko' => ['title' => '창업자의 편에 서다', 'description' => '창업자가 최우선입니다. 지원은 완전한 인간이자 기업인으로서의 리더들에게까지 확장됩니다.'],
                    'es' => ['title' => 'Abogar por los fundadores', 'description' => 'Los fundadores van primero. El apoyo se extiende a los líderes como seres humanos completos y emprendedores.'],
                    'zh-TW' => ['title' => '為創業者發聲', 'description' => '創業者優先。支援延伸到作為完整人類和企業家的領導者。'],
                    'vi' => ['title' => 'Bảo vệ nhà sáng lập', 'description' => 'Nhà sáng lập luôn đến trước. Sự hỗ trợ mở rộng đến các nhà lãnh đạo với tư cách là con người hoàn chỉnh và doanh nhân.'],
                ],
            ],
            [
                'number'         => '03',
                'title'          => 'Nourish the Network',
                'description'    => 'Functioning as a "routing layer" reducing ecosystem friction, benefiting all founders.',
                'quote_text'     => 'SV Angel to be an incredible connector of talent and ideas...opening doors and creating opportunities.',
                'quote_author'   => 'Julia Hartz',
                'quote_position' => 'CEO, Eventbrite',
                'order'          => 3,
                'translations'   => [
                    'ja' => ['title' => 'ネットワークを育む', 'description' => 'エコシステムの摩擦を減らす「ルーティングレイヤー」として機能し、すべての創業者に利益をもたらします。'],
                    'ko' => ['title' => '네트워크를 키우다', 'description' => '생태계 마찰을 줄이는 "라우팅 레이어"로 기능하여 모든 창업자에게 혜택을 제공합니다.'],
                    'es' => ['title' => 'Nutrir la red', 'description' => 'Funcionando como una "capa de enrutamiento" que reduce la fricción del ecosistema, beneficiando a todos los fundadores.'],
                    'zh-TW' => ['title' => '培育網絡', 'description' => '作為減少生態系統摩擦的「路由層」運作，惠及所有創業者。'],
                    'vi' => ['title' => 'Nuôi dưỡng mạng lưới', 'description' => 'Hoạt động như một "lớp định tuyến" giảm ma sát trong hệ sinh thái, mang lại lợi ích cho tất cả các nhà sáng lập.'],
                ],
            ],
            [
                'number'         => '04',
                'title'          => 'Do the Right Thing',
                'description'    => 'Beyond profits—fostering inclusive communities with high standards and shared wisdom.',
                'quote_text'     => 'SV Angel is more than an investor - they are a trusted partner...not just the financial return.',
                'quote_author'   => 'Florian Otto',
                'quote_position' => 'CEO, Cedar',
                'order'          => 4,
                'translations'   => [
                    'ja' => ['title' => '正しいことをする', 'description' => '利益を超えて——高い基準と共有された知恵で包括的なコミュニティを育みます。'],
                    'ko' => ['title' => '옳은 일을 하다', 'description' => '이익을 넘어서—높은 기준과 공유된 지혜로 포용적인 커뮤니티를 육성합니다.'],
                    'es' => ['title' => 'Hacer lo correcto', 'description' => 'Más allá de las ganancias: fomentar comunidades inclusivas con altos estándares y sabiduría compartida.'],
                    'zh-TW' => ['title' => '做正確的事', 'description' => '超越利潤——以高標準和共享智慧培育包容性社群。'],
                    'vi' => ['title' => 'Làm điều đúng đắn', 'description' => 'Vượt ra ngoài lợi nhuận—nuôi dưỡng các cộng đồng toàn diện với tiêu chuẩn cao và trí tuệ được chia sẻ.'],
                ],
            ],
            [
                'number'         => '05',
                'title'          => 'Show Up When It Matters',
                'description'    => 'Strategic support during inflection points: M&A, key hires, financing, communications.',
                'quote_text'     => 'I can always rely on them for help when I am solving my toughest challenges.',
                'quote_author'   => 'Guillermo Rauch',
                'quote_position' => 'CEO, Vercel',
                'order'          => 5,
                'translations'   => [
                    'ja' => ['title' => '重要な時に寄り添う', 'description' => 'M&A、重要な採用、資金調達、コミュニケーションなど変曲点での戦略的サポート。'],
                    'ko' => ['title' => '중요할 때 함께하다', 'description' => 'M&A, 핵심 채용, 자금 조달, 커뮤니케이션 등 변곡점에서의 전략적 지원.'],
                    'es' => ['title' => 'Estar cuando importa', 'description' => 'Apoyo estratégico en puntos de inflexión: M&A, contrataciones clave, financiamiento, comunicaciones.'],
                    'zh-TW' => ['title' => '在關鍵時刻挺身而出', 'description' => '在關鍵轉折點提供戰略支援：併購、關鍵招聘、融資、溝通。'],
                    'vi' => ['title' => 'Xuất hiện khi cần thiết', 'description' => 'Hỗ trợ chiến lược tại các điểm bước ngoặt: M&A, tuyển dụng chủ chốt, tài chính, truyền thông.'],
                ],
            ],
        ];

        foreach ($principles as $p) {
            Principle::updateOrCreate(['number' => $p['number']], array_merge($p, ['is_active' => true]));
        }
    }
}
