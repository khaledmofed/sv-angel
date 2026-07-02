<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutStory;

class AboutStoriesSeeder extends Seeder
{
    public function run(): void
    {
        AboutStory::truncate();

        $stories = [
            [
                'number'           => '01',
                'title'            => 'The SV Angel story',
                'description'      => "SV Angel grew out of my personal style of investing — hyper-engaged, founder-focused, and community-oriented. Codifying that strategy has helped SV Angel build some of the most iconic companies of our time.\n\nAcross our work with Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest and more, we've seen everything that can go wrong — and right — in company-building, and we share that experience to help founders when it matters most.",
                'image'            => 'about_stories/ron_and_topher.jpg',
                'image_link'       => null,
                'second_image'     => null,
                'second_image_url' => null,
                'second_image_link'=> null,
                'signature'        => '— Ron Conway',
                'order'            => 1,
                'is_active'        => true,
                'translations'     => [
                    'ja' => [
                        'title'       => 'SVエンジェルの物語',
                        'description' => "SVエンジェルは、私個人の投資スタイル——超積極的関与、創業者重視、コミュニティ志向——から生まれました。その戦略を体系化することで、SVエンジェルは現代を代表する企業のいくつかを育ててきました。\n\nGoogle、Twitter、Meta、Airbnb、Coinbase、Stripe、Pinterestなどとの取り組みを通じて、企業構築におけるあらゆる失敗と成功を目の当たりにし、最も重要な瞬間に創業者を支援するためにその経験を共有しています。",
                    ],
                    'ko' => [
                        'title'       => 'SV 앤젤의 이야기',
                        'description' => "SV 앤젤은 저의 개인적인 투자 스타일—고도로 참여적이고, 창업자 중심적이며, 커뮤니티 지향적인—에서 탄생했습니다. 그 전략을 체계화함으로써 SV 앤젤은 우리 시대 가장 상징적인 기업들을 만들어왔습니다.\n\nGoogle, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest 등과의 협업을 통해, 기업 구축에서 발생할 수 있는 모든 실수와 성공을 경험했으며, 가장 중요한 순간에 창업자들을 돕기 위해 그 경험을 공유합니다.",
                    ],
                    'es' => [
                        'title'       => 'La historia de SV Angel',
                        'description' => "SV Angel surgió de mi estilo personal de inversión: hipercomprometido, centrado en el fundador y orientado a la comunidad. Codificar esa estrategia ha ayudado a SV Angel a construir algunas de las empresas más icónicas de nuestra época.\n\nA través de nuestro trabajo con Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest y más, hemos visto todo lo que puede salir mal — y bien — en la construcción de empresas, y compartimos esa experiencia para ayudar a los fundadores cuando más importa.",
                    ],
                    'zh-TW' => [
                        'title'       => 'SV Angel 的故事',
                        'description' => "SV Angel 源自我個人的投資風格——高度投入、以創業者為中心、注重社群。將這一策略系統化，幫助 SV Angel 建立了當代最具代表性的企業。\n\n從 Google、Twitter、Meta、Airbnb、Coinbase、Stripe、Pinterest 等合作中，我們見證了企業建立的一切起伏，並在最需要的時候將這些經驗分享給創業者。",
                    ],
                    'vi' => [
                        'title'       => 'Câu chuyện SV Angel',
                        'description' => "SV Angel được hình thành từ phong cách đầu tư cá nhân của tôi — tham gia sâu, tập trung vào nhà sáng lập và định hướng cộng đồng. Việc hệ thống hóa chiến lược đó đã giúp SV Angel xây dựng một số công ty mang tính biểu tượng nhất thời đại.\n\nQua công việc với Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest và nhiều hơn nữa, chúng tôi đã thấy mọi thứ có thể sai — và đúng — trong quá trình xây dựng công ty, và chia sẻ kinh nghiệm đó để giúp các nhà sáng lập khi cần nhất.",
                    ],
                ],
            ],
            [
                'number'           => '02',
                'title'            => 'Pushing progress over time',
                'description'      => "From the earliest days of Silicon Valley to today's generation of transformative startups, SV Angel has been at the forefront of venture investing for over 30 years. What started as Ron Conway's personal investing philosophy became a firm built around one mission: helping the best founders build the most important companies.\n\nWe look forward to the next 30 years of SV Angel, supporting you and future generations of founders.",
                'image'            => 'about_stories/team_group.png',
                'image_link'       => null,
                'second_image'     => null,
                'second_image_url' => null,
                'second_image_link'=> null,
                'signature'        => null,
                'order'            => 2,
                'is_active'        => true,
                'translations'     => [
                    'ja' => [
                        'title'       => '時を超えた進歩',
                        'description' => "シリコンバレーの創成期から今日の変革的スタートアップの世代まで、SVエンジェルは30年以上にわたりベンチャー投資の最前線に立ってきました。ロン・コンウェイの個人的な投資哲学として始まったものが、一つのミッションを中心に構築された企業へと成長しました：最高の創業者が最も重要な企業を築くのを支援すること。\n\nSVエンジェルの次の30年、あなたと未来の創業者世代を支援できることを楽しみにしています。",
                    ],
                    'ko' => [
                        'title'       => '시간이 흘러도 이어지는 진보',
                        'description' => "실리콘밸리의 초창기부터 오늘날의 혁신적인 스타트업 세대까지, SV 앤젤은 30년 이상 벤처 투자의 최전선에 있어왔습니다. Ron Conway의 개인적인 투자 철학으로 시작된 것이 하나의 미션을 중심으로 한 회사로 성장했습니다: 최고의 창업자들이 가장 중요한 기업을 만드는 것을 돕는 것.\n\nSV 앤젤의 앞으로 30년, 여러분과 미래 창업자 세대를 지원하기를 기대합니다.",
                    ],
                    'es' => [
                        'title'       => 'Impulsando el progreso a lo largo del tiempo',
                        'description' => "Desde los primeros días de Silicon Valley hasta la generación actual de startups transformadoras, SV Angel ha estado a la vanguardia de la inversión en capital de riesgo durante más de 30 años. Lo que comenzó como la filosofía de inversión personal de Ron Conway se convirtió en una empresa construida en torno a una misión: ayudar a los mejores fundadores a construir las empresas más importantes.\n\nEsperamos con entusiasmo los próximos 30 años de SV Angel, apoyándote a ti y a las futuras generaciones de fundadores.",
                    ],
                    'zh-TW' => [
                        'title'       => '推動持續進步',
                        'description' => "從矽谷最早期到今天這一代具有變革性的新創公司，SV Angel 在過去 30 多年來一直站在風險投資的最前沿。從 Ron Conway 個人投資哲學起步，逐漸發展成一家圍繞一個使命而建立的公司：幫助最優秀的創業者建立最重要的企業。\n\n我們期待著 SV Angel 未來的 30 年，繼續支持您和下一代創業者。",
                    ],
                    'vi' => [
                        'title'       => 'Thúc đẩy tiến bộ theo thời gian',
                        'description' => "Từ những ngày đầu của Thung lũng Silicon đến thế hệ các startup biến đổi ngày nay, SV Angel đã đứng ở tuyến đầu của đầu tư mạo hiểm trong hơn 30 năm. Điều bắt đầu như triết lý đầu tư cá nhân của Ron Conway đã trở thành một công ty được xây dựng xung quanh một sứ mệnh: giúp các nhà sáng lập tốt nhất xây dựng những công ty quan trọng nhất.\n\nChúng tôi mong chờ 30 năm tiếp theo của SV Angel, hỗ trợ bạn và các thế hệ nhà sáng lập tương lai.",
                    ],
                ],
            ],
            [
                'number'           => '04',
                'title'            => 'Our work is never finished',
                'description'      => "We're proud of our history, and we're even more excited about the future. As the pace of change continues to accelerate, we're tracking each new sector as well as the bright minds leading the charge.\n\nHere's what doesn't change: we're here in service of founders, upholding a moral standard in the ecosystem to ensure that technology is a force for good.",
                'image'            => 'about_stories/8hgohsE3lfGAxL6WwEaINCdxuc3BIpAqZtsjLQmk.jpg',
                'image_link'       => null,
                'second_image'     => null,
                'second_image_url' => null,
                'second_image_link'=> null,
                'signature'        => null,
                'order'            => 3,
                'is_active'        => true,
                'translations'     => [
                    'ja' => [
                        'title'       => '私たちの仕事に終わりはない',
                        'description' => "私たちは自分たちの歴史を誇りに思い、未来にさらに大きな期待を抱いています。変化のペースが加速する中、新たなセクターや先頭に立つ優れた人材を追い続けています。\n\n変わらないこと：私たちは創業者のために存在し、テクノロジーが善の力となるようエコシステムの道徳的基準を守り続けます。",
                    ],
                    'ko' => [
                        'title'       => '우리의 일은 결코 끝나지 않는다',
                        'description' => "우리는 우리의 역사를 자랑스럽게 생각하며, 미래에 더욱 흥분됩니다. 변화의 속도가 계속 가속화되면서, 우리는 각각의 새로운 분야와 선두에 서는 뛰어난 인재들을 추적하고 있습니다.\n\n변하지 않는 것: 우리는 창업자를 위해 여기 있으며, 기술이 선을 위한 힘이 되도록 생태계의 도덕적 기준을 지켜나갑니다.",
                    ],
                    'es' => [
                        'title'       => 'Nuestro trabajo nunca termina',
                        'description' => "Estamos orgullosos de nuestra historia, y estamos aún más emocionados con el futuro. A medida que el ritmo del cambio continúa acelerándose, estamos rastreando cada nuevo sector y las mentes brillantes que lideran la carga.\n\nEsto es lo que no cambia: estamos aquí al servicio de los fundadores, manteniendo un estándar moral en el ecosistema para garantizar que la tecnología sea una fuerza para el bien.",
                    ],
                    'zh-TW' => [
                        'title'       => '我們的工作永不止步',
                        'description' => "我們為自己的歷史感到自豪，對未來更是充滿期待。隨著變革步伐持續加速，我們持續追蹤每個新興領域及引領浪潮的傑出人才。\n\n有一件事從未改變：我們在此服務創業者，維護生態系統的道德標準，確保科技成為向善的力量。",
                    ],
                    'vi' => [
                        'title'       => 'Công việc của chúng tôi chưa bao giờ kết thúc',
                        'description' => "Chúng tôi tự hào về lịch sử của mình và thậm chí còn hứng khởi hơn về tương lai. Khi tốc độ thay đổi tiếp tục tăng nhanh, chúng tôi đang theo dõi từng lĩnh vực mới cũng như những bộ óc sáng tạo dẫn đầu.\n\nĐây là điều không thay đổi: chúng tôi ở đây để phục vụ các nhà sáng lập, duy trì tiêu chuẩn đạo đức trong hệ sinh thái để đảm bảo rằng công nghệ là một lực lượng vì điều tốt.",
                    ],
                ],
            ],
            [
                'number'           => '03',
                'title'            => 'Building a better world',
                'description'      => "A primary motivator for our work is to shape a more just and equitable society. At SV Angel, we support causes including racial justice, access to healthcare, and reducing income inequality and gun violence.\n\nWe support The Giving Pledge, and we helped launch sf.citi to leverage the collective power of the tech sector as a force for civic action in San Francisco. When founders join our network, we strongly encourage them to contribute to the betterment of the world around us.",
                'image'            => 'about_stories/sf_city.jpg',
                'image_link'       => 'https://sfciti.org/',
                'second_image'     => null,
                'second_image_url' => 'https://images.ctfassets.net/9546dfueqxy5/JacF7rq7Lc4wI4JNfLCq5/bfcc065c3ff4956a0cbf71b7360bc5bf/charity_card_pledge.png?w=1920&q=75',
                'second_image_link'=> 'https://www.pledge1percent.org/',
                'signature'        => null,
                'order'            => 4,
                'is_active'        => true,
                'translations'     => [
                    'ja' => [
                        'title'       => 'より良い世界を築く',
                        'description' => "私たちの仕事の主な動機は、より公正で公平な社会を形成することです。SVエンジェルでは、人種的正義、医療へのアクセス、所得格差と銃暴力の削減を含む大義を支援しています。\n\n私たちはザ・ギビング・プレッジを支持し、サンフランシスコの市民活動の力としてテクノロジーセクターの集合的な力を活用するためにsf.citiの立ち上げを支援しました。創業者がネットワークに参加する際、私たちは彼らが周囲の世界の向上に貢献することを強く奨励しています。",
                    ],
                    'ko' => [
                        'title'       => '더 나은 세상 만들기',
                        'description' => "우리 일의 주요 동기는 더 공정하고 평등한 사회를 형성하는 것입니다. SV 앤젤에서는 인종 정의, 의료 접근성, 소득 불평등 및 총기 폭력 감소를 포함한 대의를 지지합니다.\n\n우리는 더 기빙 플레지를 지지하고 샌프란시스코에서 시민 행동의 힘으로서 기술 분야의 집단적 힘을 활용하기 위해 sf.citi 출시를 도왔습니다. 창업자들이 우리 네트워크에 합류할 때, 우리는 그들이 주변 세상의 개선에 기여하도록 강력히 권장합니다.",
                    ],
                    'es' => [
                        'title'       => 'Construyendo un mundo mejor',
                        'description' => "Un motivador principal de nuestro trabajo es dar forma a una sociedad más justa y equitativa. En SV Angel, apoyamos causas que incluyen la justicia racial, el acceso a la atención médica y la reducción de la desigualdad de ingresos y la violencia armada.\n\nApoyamos The Giving Pledge y ayudamos a lanzar sf.citi para aprovechar el poder colectivo del sector tecnológico como fuerza de acción cívica en San Francisco. Cuando los fundadores se unen a nuestra red, los alentamos enérgicamente a contribuir al bienestar del mundo que nos rodea.",
                    ],
                    'zh-TW' => [
                        'title'       => '建立更美好的世界',
                        'description' => "推動我們工作的主要動力是塑造一個更公正、更平等的社會。在 SV Angel，我們支持包括種族正義、醫療保健獲取、減少收入不平等和槍枝暴力等議題。\n\n我們支持捐贈誓言（The Giving Pledge），並協助成立 sf.citi，藉助科技業的集體力量推動舊金山的公民行動。當創業者加入我們的網絡時，我們強烈鼓勵他們為改善周圍的世界做出貢獻。",
                    ],
                    'vi' => [
                        'title'       => 'Xây dựng thế giới tốt đẹp hơn',
                        'description' => "Động lực chính của công việc chúng tôi là định hình một xã hội công bằng và bình đẳng hơn. Tại SV Angel, chúng tôi ủng hộ các nguyên nhân bao gồm công lý chủng tộc, tiếp cận chăm sóc sức khỏe và giảm bất bình đẳng thu nhập và bạo lực súng.\n\nChúng tôi ủng hộ The Giving Pledge và đã giúp ra mắt sf.citi để tận dụng sức mạnh tập thể của ngành công nghệ như một lực lượng hành động dân sự ở San Francisco. Khi các nhà sáng lập tham gia mạng lưới của chúng tôi, chúng tôi khuyến khích mạnh mẽ họ đóng góp vào sự cải thiện của thế giới xung quanh.",
                    ],
                ],
            ],
        ];

        foreach ($stories as $s) {
            AboutStory::create($s);
        }
    }
}
