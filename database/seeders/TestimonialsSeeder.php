<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'author_name'    => 'Sam Altman',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'OpenAI',
                'author_photo'   => 'testimonials/sam_altman.jpg',
                'quote'          => 'Ron Conway went so far above and beyond the call of duty that I\'m not even sure how to describe it. I am reasonably confident OpenAI would have fallen apart without his help. He worked around the clock for days until things were done — that is the SV Angel difference.',
                'order'          => 1,
                'translations'   => [
                    'ja' => ['quote' => 'ロン・コンウェイは職責をはるかに超えた働きをしてくれました。彼の助けなしにOpenAIが存続できたかどうか、私には確信が持てません。物事が片付くまで何日も夜通し働いてくれました——それがSVエンジェルの違いです。', 'author_title' => '共同創業者兼CEO'],
                    'ko' => ['quote' => '론 콘웨이는 의무를 훨씬 넘어서는 일을 해주었습니다. 그의 도움 없이 OpenAI가 살아남았을지 저는 꽤 확신하기 어렵습니다. 그는 모든 것이 해결될 때까지 며칠 밤낮으로 일했습니다 — 그것이 SV Angel의 차이입니다.', 'author_title' => '공동 창업자 겸 CEO'],
                    'es' => ['quote' => 'Ron Conway fue mucho más allá de lo que se esperaba, hasta el punto en que no estoy seguro de cómo describirlo. Estoy razonablemente seguro de que OpenAI se habría derrumbado sin su ayuda. Trabajó sin descanso durante días hasta que todo estuvo resuelto — esa es la diferencia de SV Angel.', 'author_title' => 'Co-Fundador y CEO'],
                    'zh-TW' => ['quote' => 'Ron Conway 的付出遠遠超出了職責所在，我甚至不確定該如何形容。我相當確信，沒有他的幫助，OpenAI 可能早已瓦解。他日以繼夜地工作了好幾天，直到一切解決——這就是 SV Angel 的不同之處。', 'author_title' => '共同創辦人兼執行長'],
                    'vi' => ['quote' => 'Ron Conway đã đi xa hơn rất nhiều so với nhiệm vụ của mình đến mức tôi không chắc làm thế nào để mô tả điều đó. Tôi khá chắc chắn rằng OpenAI sẽ sụp đổ nếu không có sự giúp đỡ của anh ấy. Anh ấy đã làm việc suốt ngày đêm trong nhiều ngày cho đến khi mọi thứ hoàn thành — đó là sự khác biệt của SV Angel.', 'author_title' => 'Đồng sáng lập & CEO'],
                ],
            ],
            [
                'author_name'    => 'Guillermo Rauch',
                'author_title'   => 'Founder & CEO',
                'author_company' => 'Vercel',
                'author_photo'   => 'testimonials/guillermo_rauch.jpg',
                'quote'          => 'Since day one, SV Angel has rolled up their sleeves to support Vercel\'s growth. SV Angel has made some of our highest-caliber introductions to date and I can always rely on them for help. They are true partners in every sense of the word.',
                'order'          => 2,
                'translations'   => [
                    'ja' => ['quote' => '創業当初から、SVエンジェルは袖をまくり上げてVercelの成長を支援してくれました。これまでで最高クラスの紹介をいくつもしてくれており、助けが必要な時はいつでも頼りにできます。あらゆる意味において、真のパートナーです。', 'author_title' => '創業者兼CEO'],
                    'ko' => ['quote' => '처음부터 SV Angel은 소매를 걷어붙이고 Vercel의 성장을 지원해 왔습니다. 지금까지 최고 수준의 소개를 해주었으며, 도움이 필요할 때 언제나 의지할 수 있습니다. 모든 의미에서 진정한 파트너입니다.', 'author_title' => '창업자 겸 CEO'],
                    'es' => ['quote' => 'Desde el primer día, SV Angel se ha arremangado para apoyar el crecimiento de Vercel. SV Angel nos ha hecho algunas de nuestras introducciones de mayor calibre hasta la fecha y siempre puedo confiar en ellos para obtener ayuda. Son verdaderos socios en todo el sentido de la palabra.', 'author_title' => 'Fundador y CEO'],
                    'zh-TW' => ['quote' => '從第一天起，SV Angel 就全力支持 Vercel 的成長。他們為我們促成了迄今最高品質的幾次引薦，我也總能依靠他們的幫助。他們是真正意義上的合作夥伴。', 'author_title' => '創辦人兼執行長'],
                    'vi' => ['quote' => 'Ngay từ ngày đầu tiên, SV Angel đã xắn tay áo để hỗ trợ sự tăng trưởng của Vercel. SV Angel đã giúp chúng tôi thực hiện một số giới thiệu chất lượng cao nhất từ trước đến nay và tôi luôn có thể dựa vào họ khi cần. Họ là những đối tác thực sự theo mọi nghĩa của từ này.', 'author_title' => 'Nhà sáng lập & CEO'],
                ],
            ],
            [
                'author_name'    => 'Ali Ghodsi',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Databricks',
                'author_photo'   => 'testimonials/ali_ghodsi.jpg',
                'quote'          => 'Our partnership with SV Angel has been a true testament to the power of aligned vision and shared values. Their unwavering support, strategic insights, and invaluable network have been instrumental in propelling Databricks forward and seizing new growth opportunities at every turn.',
                'order'          => 3,
                'translations'   => [
                    'ja' => ['quote' => 'SVエンジェルとのパートナーシップは、共通のビジョンと価値観の力を証明するものです。揺るぎないサポート、戦略的な洞察、そして貴重なネットワークは、Databricksを前進させ、あらゆる場面で新たな成長機会をつかむうえで不可欠でした。', 'author_title' => '共同創業者兼CEO'],
                    'ko' => ['quote' => 'SV Angel과의 파트너십은 공유된 비전과 가치관의 힘을 진정으로 입증합니다. 흔들림 없는 지원, 전략적 통찰력, 그리고 소중한 네트워크는 Databricks를 앞으로 나아가게 하고 모든 순간에 새로운 성장 기회를 잡는 데 있어 결정적이었습니다.', 'author_title' => '공동 창업자 겸 CEO'],
                    'es' => ['quote' => 'Nuestra asociación con SV Angel ha sido un verdadero testimonio del poder de la visión alineada y los valores compartidos. Su inquebrantable apoyo, perspectivas estratégicas y red invaluable han sido fundamentales para impulsar a Databricks y aprovechar nuevas oportunidades de crecimiento.', 'author_title' => 'Co-Fundador y CEO'],
                    'zh-TW' => ['quote' => '與 SV Angel 的合作，真正體現了共同願景與共享價值觀的力量。他們堅定的支持、策略洞察與珍貴的人脈網絡，對於推動 Databricks 前進並把握每一個新成長機會，都發揮了關鍵作用。', 'author_title' => '共同創辦人兼執行長'],
                    'vi' => ['quote' => 'Mối quan hệ đối tác với SV Angel là minh chứng thực sự cho sức mạnh của tầm nhìn chung và giá trị chung. Sự hỗ trợ bền vững, những hiểu biết chiến lược và mạng lưới vô giá của họ đã đóng vai trò quan trọng trong việc thúc đẩy Databricks tiến lên và nắm bắt các cơ hội tăng trưởng mới.', 'author_title' => '共同創辦人兼執行長'],
                ],
            ],
            [
                'author_name'    => 'Julia Hartz',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Eventbrite',
                'author_photo'   => 'testimonials/julia_hartz.jpg',
                'quote'          => 'SV Angel is an incredible connector of talent and ideas. The strategic introductions and support they cultivate have helped countless leaders navigate their greatest challenges and biggest opportunities. I could not have built Eventbrite without their belief in us.',
                'order'          => 4,
                'translations'   => [
                    'ja' => ['quote' => 'SVエンジェルは才能とアイデアの素晴らしいつなぎ役です。彼らが育んでいる戦略的な紹介とサポートは、数えきれないほどのリーダーが最大の課題と機会を乗り越えるのを助けてきました。彼らの信頼なしにはEventbriteを築くことはできませんでした。', 'author_title' => '共同創業者兼CEO'],
                    'ko' => ['quote' => 'SV Angel은 재능과 아이디어의 훌륭한 연결자입니다. 그들이 만들어 내는 전략적 소개와 지원은 수많은 리더들이 가장 큰 도전과 기회를 헤쳐나가는 데 도움이 되었습니다. 그들의 믿음 없이는 Eventbrite를 만들 수 없었을 것입니다.', 'author_title' => '공동 창업자 겸 CEO'],
                    'es' => ['quote' => 'SV Angel es un conector increíble de talento e ideas. Las presentaciones estratégicas y el apoyo que cultivan han ayudado a innumerables líderes a navegar sus mayores desafíos y oportunidades. No podría haber construido Eventbrite sin su confianza en nosotros.', 'author_title' => 'Co-Fundadora y CEO'],
                    'zh-TW' => ['quote' => 'SV Angel 是才能與創意的絕佳連接者。他們所培育的策略引薦與支持，幫助無數領導者度過了最嚴峻的挑戰與最重要的機遇。沒有他們對我們的信任，我不可能建立起 Eventbrite。', 'author_title' => '共同創辦人兼執行長'],
                    'vi' => ['quote' => 'SV Angel là người kết nối tuyệt vời của tài năng và ý tưởng. Những giới thiệu chiến lược và sự hỗ trợ mà họ tạo ra đã giúp vô số nhà lãnh đạo vượt qua những thách thức lớn nhất. Tôi không thể xây dựng Eventbrite nếu không có niềm tin của họ vào chúng tôi.', 'author_title' => 'Đồng sáng lập & CEO'],
                ],
            ],
            [
                'author_name'    => 'Florian Otto',
                'author_title'   => 'Co-Founder & CEO',
                'author_company' => 'Cedar',
                'author_photo'   => 'testimonials/florian_otto.jpg',
                'quote'          => 'SV Angel is more than an investor — they are a trusted partner to me and Cedar. If I need advice, help or a sounding board, their team is always available to support us. Their network and judgment are unmatched in Silicon Valley.',
                'order'          => 5,
                'translations'   => [
                    'ja' => ['quote' => 'SVエンジェルは単なる投資家以上の存在です——私とCedarにとって信頼できるパートナーです。アドバイスやサポートが必要な時、チームはいつでも支援してくれます。彼らのネットワークと判断力はシリコンバレーで右に出る者はいません。', 'author_title' => '共同創業者兼CEO'],
                    'ko' => ['quote' => 'SV Angel은 단순한 투자자 그 이상입니다 — 저와 Cedar에게 신뢰할 수 있는 파트너입니다. 조언이나 도움이 필요할 때, 팀은 항상 우리를 지원할 준비가 되어 있습니다. 그들의 네트워크와 판단력은 실리콘 밸리에서 타의 추종을 불허합니다.', 'author_title' => '공동 창업자 겸 CEO'],
                    'es' => ['quote' => 'SV Angel es más que un inversor — son un socio de confianza para mí y para Cedar. Si necesito consejo o ayuda, su equipo siempre está disponible para apoyarnos. Su red y su criterio no tienen igual en Silicon Valley.', 'author_title' => 'Co-Fundador y CEO'],
                    'zh-TW' => ['quote' => 'SV Angel 不只是投資者——他們是我和 Cedar 值得信賴的夥伴。無論我需要建議還是幫助，他們的團隊隨時準備支持我們。他們的人脈與判斷力在矽谷無出其右。', 'author_title' => '共同創辦人兼執行長'],
                    'vi' => ['quote' => 'SV Angel hơn cả một nhà đầu tư — họ là đối tác đáng tin cậy với tôi và Cedar. Khi tôi cần lời khuyên hay sự giúp đỡ, đội ngũ của họ luôn sẵn sàng hỗ trợ chúng tôi. Mạng lưới và khả năng phán đoán của họ là vô song ở Thung lũng Silicon.', 'author_title' => 'Đồng sáng lập & CEO'],
                ],
            ],
        ];

        Testimonial::truncate();

        foreach ($items as $i) {
            Testimonial::create(array_merge($i, ['is_active' => true]));
        }
    }
}
