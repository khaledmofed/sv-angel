<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostsSeeder extends Seeder
{
    public function run(): void
    {
        BlogPost::truncate();

        $posts = [
            [
                'title'            => 'Ron Conway on The Social Radars Podcast with Jessica Livingston and Carolynn Levy',
                'slug'             => 'ron-conway-social-radars-podcast',
                'excerpt'          => 'Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast to discuss the early days of Silicon Valley investing and what it takes to back world-changing founders.',
                'content'          => '<p>Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast to discuss the early days of Silicon Valley investing, the principles behind SV Angel, and what it takes to back world-changing founders.</p><p><a href="https://pod.link/1677066062/episode/fb9d96d261aa5b545ce9271b4dbe10f0" target="_blank" rel="noopener noreferrer">Listen to the full episode →</a></p>',
                'featured_image'   => 'blog/ron_and_jessica.jpg',
                'category'         => 'Podcast',
                'author'           => 'SV Angel',
                'read_time'        => 'Listen',
                'status'           => 'published',
                'external_url'     => 'https://pod.link/1677066062/episode/fb9d96d261aa5b545ce9271b4dbe10f0',
                'published_at'     => '2023-06-01',
                'meta_title'       => 'Ron Conway on The Social Radars Podcast with Jessica Livingston and Carolynn Levy',
                'meta_description' => 'Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast.',
                'translations'     => [
                    'ja' => ['title' => 'ソーシャルレーダーズポッドキャスト：ロン・コンウェイとジェシカ・リビングストン、キャロリン・レヴィの対談', 'excerpt' => 'ロン・コンウェイがジェシカ・リビングストンとキャロリン・レヴィのポッドキャストに参加し、シリコンバレー投資の初期と、世界を変える創業者を支援するために何が必要かを語ります。'],
                    'ko' => ['title' => '소셜 레이더스 팟캐스트: 론 콘웨이와 제시카 리빙스턴, 캐롤린 레비의 대담', 'excerpt' => '론 콘웨이가 소셜 레이더스 팟캐스트에서 제시카 리빙스턴, 캐롤린 레비와 함께 실리콘 밸리 투자의 초기와 세상을 바꾸는 창업자를 지원하기 위해 필요한 것이 무엇인지 이야기합니다.'],
                    'es' => ['title' => 'Ron Conway en The Social Radars Podcast con Jessica Livingston y Carolynn Levy', 'excerpt' => 'Ron Conway se une a Jessica Livingston y Carolynn Levy en The Social Radars Podcast para hablar sobre los primeros días de la inversión en Silicon Valley y lo que se necesita para respaldar a los fundadores que cambian el mundo.'],
                    'zh-TW' => ['title' => 'Ron Conway 於 The Social Radars Podcast 與 Jessica Livingston 和 Carolynn Levy 對談', 'excerpt' => 'Ron Conway 加入 Jessica Livingston 和 Carolynn Levy 的 The Social Radars Podcast，討論矽谷投資的早期歲月以及支持改變世界的創業者所需的條件。'],
                    'vi' => ['title' => 'Ron Conway trên The Social Radars Podcast cùng Jessica Livingston và Carolynn Levy', 'excerpt' => 'Ron Conway tham gia cùng Jessica Livingston và Carolynn Levy trong The Social Radars Podcast để thảo luận về những ngày đầu đầu tư ở Thung lũng Silicon và những gì cần thiết để hỗ trợ các nhà sáng lập thay đổi thế giới.'],
                ],
            ],
            [
                'title'            => 'Airbnb — Ron Conway and the Economic Empowerment Award',
                'slug'             => 'airbnb-ron-conway-economic-empowerment-award',
                'excerpt'          => 'Airbnb recognizes Ron Conway with the Economic Empowerment Award for his decades-long commitment to building a more inclusive and equitable technology ecosystem.',
                'content'          => '<p>Airbnb recognizes Ron Conway with the Economic Empowerment Award for his decades-long commitment to building a more inclusive and equitable technology ecosystem.</p><p><a href="https://news.airbnb.com/ron-conway-and-the-economic-empowerment-award/" target="_blank" rel="noopener noreferrer">Read the full story →</a></p>',
                'featured_image'   => 'blog/airbnb_economic_empowerment.jpg',
                'category'         => 'Press',
                'author'           => 'Airbnb Newsroom',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://news.airbnb.com/ron-conway-and-the-economic-empowerment-award/',
                'published_at'     => '2022-11-01',
                'meta_title'       => 'Airbnb — Ron Conway and the Economic Empowerment Award',
                'meta_description' => 'Airbnb recognizes Ron Conway with the Economic Empowerment Award.',
                'translations'     => [
                    'ja' => ['title' => 'Airbnb — ロン・コンウェイと経済的エンパワーメント賞', 'excerpt' => 'Airbnbは、より包括的で公正なテクノロジーエコシステムの構築への数十年にわたる取り組みを称え、ロン・コンウェイに経済的エンパワーメント賞を授与します。'],
                    'ko' => ['title' => 'Airbnb — 론 콘웨이와 경제적 역량 강화 상', 'excerpt' => 'Airbnb는 더 포용적이고 공평한 기술 생태계를 구축하기 위한 수십 년에 걸친 헌신을 인정하여 론 콘웨이에게 경제적 역량 강화 상을 수여합니다.'],
                    'es' => ['title' => 'Airbnb — Ron Conway y el Premio al Empoderamiento Económico', 'excerpt' => 'Airbnb reconoce a Ron Conway con el Premio al Empoderamiento Económico por su compromiso de décadas en la construcción de un ecosistema tecnológico más inclusivo y equitativo.'],
                    'zh-TW' => ['title' => 'Airbnb — Ron Conway 與經濟賦能獎', 'excerpt' => 'Airbnb 表彰 Ron Conway 數十年來致力於建立更具包容性和公平性的科技生態系統，授予其經濟賦能獎。'],
                    'vi' => ['title' => 'Airbnb — Ron Conway và Giải thưởng Trao quyền Kinh tế', 'excerpt' => 'Airbnb vinh danh Ron Conway với Giải thưởng Trao quyền Kinh tế vì cam kết hàng thập kỷ xây dựng hệ sinh thái công nghệ bao gồm hơn và công bằng hơn.'],
                ],
            ],
            [
                'title'            => 'Ron Conway and the Economic Empowerment Award: A message from Pinterest Co-Founder and CEO Ben Silbermann',
                'slug'             => 'ron-conway-economic-empowerment-award-ben-silbermann',
                'excerpt'          => 'Pinterest Co-Founder and CEO Ben Silbermann shares a personal message about Ron Conway\'s impact on founders and the broader technology community.',
                'content'          => '<p>Pinterest Co-Founder and CEO Ben Silbermann shares a personal message about Ron Conway\'s profound impact on founders and the broader technology community — and why the Economic Empowerment Award is so fitting.</p><p><a href="https://www.linkedin.com/pulse/ron-conway-economic-empowerment-award-ben-silbermann/" target="_blank" rel="noopener noreferrer">Read on LinkedIn →</a></p>',
                'featured_image'   => 'blog/ben_silbermann_bw.jpg',
                'category'         => 'Press',
                'author'           => 'Ben Silbermann',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://www.linkedin.com/pulse/ron-conway-economic-empowerment-award-ben-silbermann/',
                'published_at'     => '2022-10-01',
                'meta_title'       => 'Ron Conway and the Economic Empowerment Award: A message from Ben Silbermann',
                'meta_description' => 'Pinterest Co-Founder Ben Silbermann on Ron Conway.',
                'translations'     => [
                    'ja' => ['title' => 'ロン・コンウェイと経済的エンパワーメント賞：Pinterestの共同創業者兼CEOベン・シルバーマンからのメッセージ', 'excerpt' => 'Pinterestの共同創業者兼CEOのベン・シルバーマンが、創業者やテクノロジーコミュニティ全体へのロン・コンウェイの影響について個人的なメッセージを届けます。'],
                    'ko' => ['title' => '론 콘웨이와 경제적 역량 강화 상: Pinterest 공동 창업자 겸 CEO 벤 실버만의 메시지', 'excerpt' => 'Pinterest 공동 창업자 겸 CEO 벤 실버만이 창업자들과 광범위한 기술 커뮤니티에 대한 론 콘웨이의 영향력에 대한 개인 메시지를 공유합니다.'],
                    'es' => ['title' => 'Ron Conway y el Premio al Empoderamiento Económico: Un mensaje del Co-Fundador y CEO de Pinterest, Ben Silbermann', 'excerpt' => 'El co-fundador y CEO de Pinterest, Ben Silbermann, comparte un mensaje personal sobre el impacto de Ron Conway en los fundadores y la comunidad tecnológica en general.'],
                    'zh-TW' => ['title' => 'Ron Conway 與經濟賦能獎：Pinterest 共同創辦人兼 CEO Ben Silbermann 的致辭', 'excerpt' => 'Pinterest 共同創辦人兼 CEO Ben Silbermann 分享了一封個人訊息，談及 Ron Conway 對創業者及廣大科技社群的深遠影響。'],
                    'vi' => ['title' => 'Ron Conway và Giải thưởng Trao quyền Kinh tế: Thông điệp từ Đồng sáng lập kiêm CEO Pinterest, Ben Silbermann', 'excerpt' => 'Đồng sáng lập kiêm CEO Pinterest Ben Silbermann chia sẻ thông điệp cá nhân về tác động của Ron Conway đối với các nhà sáng lập và cộng đồng công nghệ rộng lớn hơn.'],
                ],
            ],
            [
                'title'            => 'Airbnb & DoorDash: Honored to Be Part of Their Journey',
                'slug'             => 'airbnb-doordash-honored-to-be-part-of-their-journey',
                'excerpt'          => 'SV Angel reflects on being part of the Airbnb and DoorDash journeys — two companies that redefined their industries and went public on the same day.',
                'content'          => '<p>SV Angel reflects on being part of the Airbnb and DoorDash journeys — two companies that redefined their industries and went public on the same historic day in December 2020.</p><p>Both companies embody what we look for in founders: resilience, long-term thinking, and a genuine belief in the product they\'re building.</p>',
                'featured_image'   => 'blog/airbnb_doordash.jpg',
                'category'         => 'Portfolio',
                'author'           => 'SV Angel',
                'read_time'        => 'Listen',
                'status'           => 'published',
                'external_url'     => null,
                'published_at'     => '2020-12-10',
                'meta_title'       => 'Airbnb & DoorDash: Honored to Be Part of Their Journey',
                'meta_description' => 'SV Angel reflects on the Airbnb and DoorDash IPO journeys.',
                'translations'     => [
                    'ja' => ['title' => 'Airbnb & DoorDash：彼らの旅に携わることができた光栄', 'excerpt' => 'SVエンジェルは、業界を再定義し同じ日に上場した2つの企業、AirbnbとDoorDashの旅に関わることができたことを振り返ります。'],
                    'ko' => ['title' => 'Airbnb & DoorDash: 그들의 여정의 일부가 된 것을 영광으로 생각합니다', 'excerpt' => 'SV Angel은 각자의 산업을 재정의하고 같은 날 상장한 두 회사인 Airbnb와 DoorDash의 여정에 참여할 수 있었던 것을 돌아봅니다.'],
                    'es' => ['title' => 'Airbnb & DoorDash: Honrados de ser parte de su camino', 'excerpt' => 'SV Angel reflexiona sobre ser parte de los viajes de Airbnb y DoorDash — dos empresas que redefinieron sus industrias y salieron a bolsa el mismo día.'],
                    'zh-TW' => ['title' => 'Airbnb & DoorDash：榮幸成為他們旅程的一部分', 'excerpt' => 'SV Angel 回顧了參與 Airbnb 和 DoorDash 旅程的歷程——這兩家重新定義了各自行業的公司，在同一天成功上市。'],
                    'vi' => ['title' => 'Airbnb & DoorDash: Tự hào là một phần trong hành trình của họ', 'excerpt' => 'SV Angel nhìn lại việc là một phần trong hành trình của Airbnb và DoorDash — hai công ty đã tái định nghĩa ngành của họ và niêm yết cùng ngày.'],
                ],
            ],
            [
                'title'            => 'Ron Conway Explained',
                'slug'             => 'ron-conway-explained',
                'excerpt'          => 'A profile of Ron Conway — Silicon Valley\'s most prolific angel investor — exploring his investing philosophy, network, and decades of impact.',
                'content'          => '<p>A profile of Ron Conway exploring his investing philosophy, network, and decades of impact on the technology ecosystem.</p><p><a href="https://a16z.com/2010/04/06/ron-conway-explained/" target="_blank">Read on a16z →</a></p>',
                'featured_image'   => 'blog/ron_conway_explained.jpg',
                'category'         => 'Press',
                'author'           => 'Andreessen Horowitz',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://a16z.com/2010/04/06/ron-conway-explained/',
                'published_at'     => '2010-04-06',
                'meta_title'       => 'Ron Conway Explained',
                'meta_description' => 'A profile of Ron Conway — Silicon Valley\'s most prolific angel investor.',
                'translations'     => [
                    'ja' => ['title' => 'ロン・コンウェイの全貌', 'excerpt' => 'シリコンバレーで最も精力的なエンジェル投資家、ロン・コンウェイのプロフィール——彼の投資哲学、ネットワーク、そして数十年にわたる影響を探ります。'],
                    'ko' => ['title' => '론 콘웨이 해설', 'excerpt' => '실리콘 밸리에서 가장 왕성한 엔젤 투자자인 론 콘웨이의 프로필 — 그의 투자 철학, 네트워크, 수십 년에 걸친 영향력을 탐구합니다.'],
                    'es' => ['title' => 'Ron Conway Explicado', 'excerpt' => 'Un perfil de Ron Conway — el inversor ángel más prolífico de Silicon Valley — explorando su filosofía de inversión, red y décadas de impacto.'],
                    'zh-TW' => ['title' => '解讀 Ron Conway', 'excerpt' => '矽谷最多產的天使投資人 Ron Conway 的人物側寫——探索他的投資哲學、人脈網絡以及數十年的深遠影響。'],
                    'vi' => ['title' => 'Giải mã Ron Conway', 'excerpt' => 'Hồ sơ về Ron Conway — nhà đầu tư thiên thần năng suất nhất Thung lũng Silicon — khám phá triết lý đầu tư, mạng lưới và hàng thập kỷ tạo ra tác động của ông.'],
                ],
            ],
            [
                'title'            => 'SV Angel Speaker Series: Bill Gates in Conversation with Ron Conway',
                'slug'             => 'sva-speaker-series-bill-gates-ron-conway',
                'excerpt'          => 'SV Angel hosted a private Speaker Series conversation between Bill Gates and Ron Conway covering technology, philanthropy, and the future of innovation.',
                'content'          => '<p>SV Angel hosted a private Speaker Series conversation between Bill Gates and Ron Conway, covering technology, philanthropy, and the future of innovation.</p><p><a href="https://svangel.medium.com/sva-speaker-series-bill-gates-in-conversation-with-ron-conway-c30ad142963b" target="_blank">Read on Medium →</a></p>',
                'featured_image'   => 'blog/bill_gates_ron_conway.jpg',
                'category'         => 'Speaker Series',
                'author'           => 'SV Angel',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://svangel.medium.com/sva-speaker-series-bill-gates-in-conversation-with-ron-conway-c30ad142963b',
                'published_at'     => '2021-05-01',
                'meta_title'       => 'SV Angel Speaker Series: Bill Gates in Conversation with Ron Conway',
                'meta_description' => 'Bill Gates and Ron Conway discuss technology and the future of innovation.',
                'translations'     => [
                    'ja' => ['title' => 'SVエンジェル・スピーカーシリーズ：ビル・ゲイツとロン・コンウェイの対話', 'excerpt' => 'SVエンジェルは、テクノロジー、慈善活動、そしてイノベーションの未来をテーマにしたビル・ゲイツとロン・コンウェイのプライベートな対談を開催しました。'],
                    'ko' => ['title' => 'SV Angel 스피커 시리즈: 빌 게이츠와 론 콘웨이의 대화', 'excerpt' => 'SV Angel은 기술, 자선 활동 및 혁신의 미래를 주제로 한 빌 게이츠와 론 콘웨이의 비공개 스피커 시리즈 대화를 개최했습니다.'],
                    'es' => ['title' => 'Serie de Oradores de SV Angel: Bill Gates en Conversación con Ron Conway', 'excerpt' => 'SV Angel organizó una conversación privada de la Serie de Oradores entre Bill Gates y Ron Conway sobre tecnología, filantropía y el futuro de la innovación.'],
                    'zh-TW' => ['title' => 'SV Angel 演講者系列：Bill Gates 與 Ron Conway 的對話', 'excerpt' => 'SV Angel 舉辦了 Bill Gates 與 Ron Conway 的私人演講者系列對話，涵蓋科技、慈善事業和創新的未來。'],
                    'vi' => ['title' => 'SV Angel Speaker Series: Bill Gates trò chuyện với Ron Conway', 'excerpt' => 'SV Angel tổ chức cuộc trò chuyện Speaker Series riêng tư giữa Bill Gates và Ron Conway về công nghệ, từ thiện và tương lai của đổi mới sáng tạo.'],
                ],
            ],
        ];

        foreach ($posts as $p) {
            BlogPost::create($p);
        }
    }
}
