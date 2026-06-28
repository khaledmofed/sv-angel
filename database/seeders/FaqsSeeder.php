<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqsSeeder extends Seeder
{
    public function run(): void
    {
        Faq::truncate();

        $faqs = [
            // English
            ['lang'=>'en','question'=>'What stage do you invest in?','answer'=>'We invest at both Seed and Growth stages, backing founders from their earliest days through significant scale.','order'=>1],
            ['lang'=>'en','question'=>'What sectors do you focus on?','answer'=>'Our portfolio spans AI, Consumer, Crypto, Enterprise, Fintech, Healthcare + Bio, and Marketplaces.','order'=>2],
            ['lang'=>'en','question'=>'How do I get in touch?','answer'=>'Reach out through our contact page. We read every message and respond to those that align with our investment thesis.','order'=>3],
            ['lang'=>'en','question'=>'What is your investment philosophy?','answer'=>'World-changing companies start with meaningful relationships. We are advocates for founders — hyper-engaged, founder-focused, and community-oriented.','order'=>4],
            ['lang'=>'en','question'=>'Where are you based?','answer'=>'We are based in San Francisco, CA and have been investing in Bay Area companies since the 1990s.','order'=>5],
            ['lang'=>'en','question'=>'How long have you been investing?','answer'=>'Ron Conway has been an active angel investor since the mid-1990s. SV Angel was formally established as a fund and has been investing for over 30 years.','order'=>6],

            // Japanese
            ['lang'=>'ja','question'=>'どのステージに投資していますか？','answer'=>'シードとグロースの両ステージに投資し、創業初期から大きなスケールまで創業者を支援します。','order'=>1],
            ['lang'=>'ja','question'=>'どのセクターに注力していますか？','answer'=>'AI、コンシューマー、クリプト、エンタープライズ、フィンテック、ヘルスケア・バイオ、マーケットプレイスに幅広く投資しています。','order'=>2],
            ['lang'=>'ja','question'=>'連絡はどのようにすればよいですか？','answer'=>'お問い合わせページからご連絡ください。すべてのメッセージを読み、投資方針に合致するものに返信します。','order'=>3],
            ['lang'=>'ja','question'=>'投資哲学は何ですか？','answer'=>'世界を変える企業は、意義ある関係から始まります。私たちは創業者の強力なパートナーとして、深く関与し、コミュニティ志向です。','order'=>4],
            ['lang'=>'ja','question'=>'どこに拠点を置いていますか？','answer'=>'カリフォルニア州サンフランシスコに拠点を置き、1990年代からベイエリアの企業に投資しています。','order'=>5],
            ['lang'=>'ja','question'=>'いつから投資を始めましたか？','answer'=>'ロン・コンウェイは1990年代半ばから活発なエンジェル投資家として活動しており、SVエンジェルは30年以上の投資実績があります。','order'=>6],

            // Korean
            ['lang'=>'ko','question'=>'어떤 단계에 투자하나요?','answer'=>'시드 및 그로스 단계 모두에 투자하며, 창업 초기부터 대규모 성장까지 창업자를 지원합니다.','order'=>1],
            ['lang'=>'ko','question'=>'어떤 분야에 집중하나요?','answer'=>'AI, 소비자, 크립토, 엔터프라이즈, 핀테크, 헬스케어·바이오, 마켓플레이스 등 다양한 분야에 투자합니다.','order'=>2],
            ['lang'=>'ko','question'=>'어떻게 연락할 수 있나요?','answer'=>'문의 페이지를 통해 연락하세요. 모든 메시지를 읽고 투자 철학에 맞는 메시지에 답변드립니다.','order'=>3],
            ['lang'=>'ko','question'=>'투자 철학은 무엇인가요?','answer'=>'세상을 바꾸는 기업은 의미 있는 관계에서 시작합니다. 우리는 창업자의 강력한 지지자로서 깊이 관여하고 커뮤니티 중심으로 활동합니다.','order'=>4],
            ['lang'=>'ko','question'=>'어디에 위치해 있나요?','answer'=>'캘리포니아 주 샌프란시스코에 위치하며, 1990년대부터 베이 에어리어 기업에 투자해 왔습니다.','order'=>5],
            ['lang'=>'ko','question'=>'얼마나 오래 투자해 왔나요?','answer'=>'론 콘웨이는 1990년대 중반부터 활발한 엔젤 투자자로 활동해 왔으며, SV Angel은 30년 이상의 투자 역사를 가지고 있습니다.','order'=>6],

            // Spanish
            ['lang'=>'es','question'=>'¿En qué etapa invierten?','answer'=>'Invertimos tanto en etapas Seed como Growth, apoyando a los fundadores desde sus primeros días hasta una escala significativa.','order'=>1],
            ['lang'=>'es','question'=>'¿En qué sectores se enfocan?','answer'=>'Nuestra cartera abarca IA, Consumidor, Cripto, Empresarial, Fintech, Salud + Bio y Mercados.','order'=>2],
            ['lang'=>'es','question'=>'¿Cómo puedo contactarles?','answer'=>'Contáctenos a través de nuestra página de contacto. Leemos cada mensaje y respondemos a los que se alinean con nuestra tesis de inversión.','order'=>3],
            ['lang'=>'es','question'=>'¿Cuál es su filosofía de inversión?','answer'=>'Las empresas que cambian el mundo comienzan con relaciones significativas. Somos defensores de los fundadores: muy comprometidos, centrados en ellos y orientados a la comunidad.','order'=>4],
            ['lang'=>'es','question'=>'¿Dónde están ubicados?','answer'=>'Estamos ubicados en San Francisco, CA y hemos estado invirtiendo en empresas del Área de la Bahía desde la década de 1990.','order'=>5],
            ['lang'=>'es','question'=>'¿Cuánto tiempo llevan invirtiendo?','answer'=>'Ron Conway ha sido un inversor ángel activo desde mediados de la década de 1990. SV Angel fue formalmente establecido como fondo y lleva más de 30 años invirtiendo.','order'=>6],

            // Traditional Chinese
            ['lang'=>'zh-TW','question'=>'您投資哪個階段？','answer'=>'我們投資種子輪和成長輪兩個階段，從創業初期到大規模擴張全程支持創業者。','order'=>1],
            ['lang'=>'zh-TW','question'=>'您專注於哪些領域？','answer'=>'我們的投資組合涵蓋人工智慧、消費者、加密貨幣、企業、金融科技、醫療保健和市場平台。','order'=>2],
            ['lang'=>'zh-TW','question'=>'如何與您聯繫？','answer'=>'請透過我們的聯絡頁面與我們聯繫。我們閱讀每一條訊息，並回覆與我們投資理念相符的訊息。','order'=>3],
            ['lang'=>'zh-TW','question'=>'您的投資理念是什麼？','answer'=>'改變世界的企業始於有意義的關係。我們是創業者的倡導者——高度參與、以創業者為中心並注重社群。','order'=>4],
            ['lang'=>'zh-TW','question'=>'您的總部在哪裡？','answer'=>'我們總部位於加州舊金山，自1990年代起投資灣區企業。','order'=>5],
            ['lang'=>'zh-TW','question'=>'您投資多久了？','answer'=>'Ron Conway自1990年代中期以來一直是活躍的天使投資人。SV Angel正式成立為基金，已有30多年的投資歷史。','order'=>6],

            // Vietnamese
            ['lang'=>'vi','question'=>'Bạn đầu tư ở giai đoạn nào?','answer'=>'Chúng tôi đầu tư ở cả giai đoạn Hạt giống và Tăng trưởng, hỗ trợ các nhà sáng lập từ những ngày đầu tiên cho đến khi mở rộng quy mô.','order'=>1],
            ['lang'=>'vi','question'=>'Bạn tập trung vào lĩnh vực nào?','answer'=>'Danh mục đầu tư của chúng tôi trải rộng trên AI, Tiêu dùng, Crypto, Doanh nghiệp, Fintech, Y tế + Sinh học và Sàn giao dịch.','order'=>2],
            ['lang'=>'vi','question'=>'Làm thế nào để liên hệ với bạn?','answer'=>'Hãy liên hệ qua trang liên hệ của chúng tôi. Chúng tôi đọc mọi tin nhắn và trả lời những tin nhắn phù hợp với luận điểm đầu tư của mình.','order'=>3],
            ['lang'=>'vi','question'=>'Triết lý đầu tư của bạn là gì?','answer'=>'Các công ty thay đổi thế giới bắt đầu từ những mối quan hệ có ý nghĩa. Chúng tôi là người ủng hộ các nhà sáng lập — tham gia sâu, tập trung vào nhà sáng lập và định hướng cộng đồng.','order'=>4],
            ['lang'=>'vi','question'=>'Bạn có trụ sở ở đâu?','answer'=>'Chúng tôi có trụ sở tại San Francisco, CA và đã đầu tư vào các công ty ở Vùng Vịnh từ những năm 1990.','order'=>5],
            ['lang'=>'vi','question'=>'Bạn đã đầu tư bao lâu rồi?','answer'=>'Ron Conway là nhà đầu tư thiên thần năng động từ giữa những năm 1990. SV Angel được thành lập chính thức như một quỹ và đã đầu tư hơn 30 năm.','order'=>6],
        ];

        foreach ($faqs as $f) {
            Faq::create(array_merge($f, ['is_active' => true]));
        }
    }
}
