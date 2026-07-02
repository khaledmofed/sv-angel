<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMembersSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::truncate();

        $members = [
            [
                'name'         => 'Ron Conway',
                'photo'        => 'team/ron_conway.jpg',
                'title'        => 'Founder and Managing Partner',
                'bio'          => 'Founded SV Angel; active angel investor since mid-90s. Former exec at National Semiconductor (1973-1979), co-founder/President/CEO of Altos Computer Systems (1979-1990, went public 1982). Vanity Fair\'s 100 most influential in Information Age; TechCrunch Best Angel Award; Forbes Midas list since 2011. Giving Pledge member; major donor to UCSF Medical Center. Gun violence prevention advocate.',
                'twitter_url'  => 'https://twitter.com/RonConway',
                'order'        => 1,
                'translations' => [
                    'ja' => ['title' => '創業者兼マネージング・パートナー', 'bio' => 'SVエンジェルを設立。1990年代半ばから活躍するエンジェル投資家。National Semiconductor元幹部（1973-1979年）、Altos Computer Systems共同創業者兼社長兼CEO（1979-1990年、1982年上場）。Vanity Fair「情報化時代の最も影響力ある100人」選出、TechCrunchベストエンジェル賞、Forbes Midasリスト（2011年以降）。Giving Pledge加盟、UCSF医療センターへの主要寄付者。銃暴力防止の提唱者。'],
                    'ko' => ['title' => '창업자 겸 매니징 파트너', 'bio' => 'SV Angel 설립. 1990년대 중반부터 활동한 엔젤 투자자. National Semiconductor 전 임원(1973-1979), Altos Computer Systems 공동 창업자 겸 대표이사(1979-1990, 1982년 상장). Vanity Fair 정보화 시대 가장 영향력 있는 100인, TechCrunch 최우수 엔젤상, Forbes Midas 리스트(2011년부터). Giving Pledge 회원, UCSF 메디컬센터 주요 후원자. 총기 폭력 방지 옹호자.'],
                    'es' => ['title' => 'Fundador y Socio Director', 'bio' => 'Fundó SV Angel; inversor ángel activo desde mediados de los 90. Ex ejecutivo de National Semiconductor (1973-1979), cofundador/Presidente/CEO de Altos Computer Systems (1979-1990, salida a bolsa en 1982). 100 más influyentes de Vanity Fair en la Era de la Información; Premio Mejor Ángel de TechCrunch; lista Forbes Midas desde 2011. Miembro de Giving Pledge; donante principal del Centro Médico UCSF. Defensor de la prevención de la violencia armada.'],
                    'zh-TW' => ['title' => '創始人兼管理合夥人', 'bio' => 'SV Angel 創始人；自 1990 年代中期起為活躍天使投資人。曾任 National Semiconductor 高管（1973-1979），Altos Computer Systems 共同創辦人兼總裁兼 CEO（1979-1990，1982 年上市）。《Vanity Fair》資訊時代百大影響力人物，TechCrunch 最佳天使獎，Forbes Midas 榜單（2011 年起）。Giving Pledge 成員，UCSF 醫療中心主要捐贈者。槍枝暴力防治倡導者。'],
                    'vi' => ['title' => 'Nhà sáng lập & Đối tác Điều hành', 'bio' => 'Sáng lập SV Angel; nhà đầu tư thiên thần tích cực từ giữa những năm 90. Cựu lãnh đạo National Semiconductor (1973-1979), đồng sáng lập/Chủ tịch/CEO Altos Computer Systems (1979-1990, niêm yết 1982). Top 100 người ảnh hưởng nhất thời đại thông tin của Vanity Fair; Giải Thiên thần tốt nhất TechCrunch; danh sách Forbes Midas từ 2011. Thành viên Giving Pledge; nhà tài trợ lớn UCSF Medical Center. Người vận động phòng chống bạo lực súng đạn.'],
                ],
            ],
            [
                'name'         => 'Ronny Conway',
                'photo'        => 'team/ronny_conway.jpg',
                'title'        => 'Managing Partner',
                'bio'          => 'Early-stage investing focus throughout career. First Partner at Andreessen Horowitz leading seed/early-stage investing (Airbnb, Instagram, Optimizely, Pinterest, Dollar Shave Club, Twitter). Six years at Google; early Google Ventures employee. Founded A.Capital in 2014 investing in Notion, Hugging Face, Replit, Databricks, Character.ai. UCLA bachelor\'s degree.',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 2,
                'translations' => [
                    'ja' => ['title' => 'マネージング・パートナー', 'bio' => 'キャリアを通じてアーリーステージ投資に注力。Andreessen Horowitzの初期パートナーとしてシード/アーリーステージ投資をリード（Airbnb、Instagram、Optimizely、Pinterest、Dollar Shave Club、Twitter）。Google在籍6年、Google Ventures初期従業員。2014年にA.Capitalを設立し、Notion、Hugging Face、Replit、Databricks、Character.aiに投資。UCLA学士号。'],
                    'ko' => ['title' => '매니징 파트너', 'bio' => '커리어 전반에 걸쳐 초기 단계 투자에 집중. Andreessen Horowitz의 첫 번째 파트너로 시드/초기 단계 투자 주도(Airbnb, Instagram, Optimizely, Pinterest, Dollar Shave Club, Twitter). Google 6년 근무, Google Ventures 초기 직원. 2014년 A.Capital 설립, Notion, Hugging Face, Replit, Databricks, Character.ai 투자. UCLA 학사.'],
                    'es' => ['title' => 'Socio Director', 'bio' => 'Enfoque en inversión de etapa temprana durante toda su carrera. Primer Socio en Andreessen Horowitz liderando inversiones iniciales (Airbnb, Instagram, Optimizely, Pinterest, Dollar Shave Club, Twitter). Seis años en Google; empleado temprano de Google Ventures. Fundó A.Capital en 2014 invirtiendo en Notion, Hugging Face, Replit, Databricks, Character.ai. Licenciado en UCLA.'],
                    'zh-TW' => ['title' => '管理合夥人', 'bio' => '職業生涯始終專注早期階段投資。擔任 Andreessen Horowitz 首位合夥人，主導種子/早期投資（Airbnb、Instagram、Optimizely、Pinterest、Dollar Shave Club、Twitter）。在 Google 任職六年，為 Google Ventures 早期員工。2014 年創立 A.Capital，投資 Notion、Hugging Face、Replit、Databricks、Character.ai。UCLA 學士。'],
                    'vi' => ['title' => 'Đối tác Điều hành', 'bio' => 'Tập trung vào đầu tư giai đoạn đầu suốt sự nghiệp. Đối tác đầu tiên tại Andreessen Horowitz dẫn đầu đầu tư hạt giống/đầu (Airbnb, Instagram, Optimizely, Pinterest, Dollar Shave Club, Twitter). Sáu năm tại Google; nhân viên đầu Google Ventures. Thành lập A.Capital năm 2014 đầu tư vào Notion, Hugging Face, Replit, Databricks, Character.ai. Cử nhân UCLA.'],
                ],
            ],
            [
                'name'         => 'Topher Conway',
                'photo'        => 'team/topher_conway.jpg',
                'title'        => 'Managing Partner',
                'bio'          => 'Joined SV Angel 2009 from business development/sales background. Works closely with OpenAI, Rippling, Hugging Face, Notion, Stripe, Anduril, Mercury, Sierra, TogetherAI, Coinbase, DoorDash. Multiple Forbes Midas and Midas Seed list recognitions. UCLA bachelor\'s degree.',
                'twitter_url'  => 'https://twitter.com/topherc',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 3,
                'translations' => [
                    'ja' => ['title' => 'マネージング・パートナー', 'bio' => '2009年にビジネス開発・営業のバックグラウンドを持ちSVエンジェルに参加。OpenAI、Rippling、Hugging Face、Notion、Stripe、Anduril、Mercury、Sierra、TogetherAI、Coinbase、DoorDashと密接に連携。Forbes MidasおよびMidas Seedリスト複数回選出。UCLA学士号。'],
                    'ko' => ['title' => '매니징 파트너', 'bio' => '2009년 사업개발/영업 배경으로 SV Angel에 합류. OpenAI, Rippling, Hugging Face, Notion, Stripe, Anduril, Mercury, Sierra, TogetherAI, Coinbase, DoorDash와 긴밀히 협력. Forbes Midas 및 Midas Seed 리스트 다수 선정. UCLA 학사.'],
                    'es' => ['title' => 'Socio Director', 'bio' => 'Se unió a SV Angel en 2009 con experiencia en desarrollo de negocios y ventas. Trabaja estrechamente con OpenAI, Rippling, Hugging Face, Notion, Stripe, Anduril, Mercury, Sierra, TogetherAI, Coinbase, DoorDash. Múltiples reconocimientos en las listas Forbes Midas y Midas Seed. Licenciado en UCLA.'],
                    'zh-TW' => ['title' => '管理合夥人', 'bio' => '2009 年以業務開發/銷售背景加入 SV Angel。與 OpenAI、Rippling、Hugging Face、Notion、Stripe、Anduril、Mercury、Sierra、TogetherAI、Coinbase、DoorDash 密切合作。多次入選 Forbes Midas 及 Midas Seed 榜單。UCLA 學士。'],
                    'vi' => ['title' => 'Đối tác Điều hành', 'bio' => 'Gia nhập SV Angel năm 2009 với nền tảng phát triển kinh doanh/bán hàng. Làm việc chặt chẽ với OpenAI, Rippling, Hugging Face, Notion, Stripe, Anduril, Mercury, Sierra, TogetherAI, Coinbase, DoorDash. Nhiều lần vào danh sách Forbes Midas và Midas Seed. Cử nhân UCLA.'],
                ],
            ],
            [
                'name'         => 'Ashvin Bachireddy',
                'photo'        => 'team/ashvin_bachireddy.jpg',
                'title'        => 'Managing Partner — Growth',
                'bio'          => 'Leads Growth Fund. Co-founder Geodesic Capital (Airbnb, Confluent, Databricks, Figma, Snapchat, Vercel investments). Head of Growth Stage Investing at Andreessen Horowitz. Multiple Forbes Midas List recognitions. UC San Diego B.S. Management Science.',
                'twitter_url'  => 'https://twitter.com/ashvinb',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 4,
                'translations' => [
                    'ja' => ['title' => 'マネージング・パートナー（グロース）', 'bio' => 'グロースファンドを主導。Geodesic Capital共同創業者（Airbnb、Confluent、Databricks、Figma、Snapchat、Vercel投資）。Andreessen Horowitzグロースステージ投資責任者。Forbes Midasリスト複数回選出。カリフォルニア大学サンディエゴ校経営科学学士。'],
                    'ko' => ['title' => '매니징 파트너 — 성장', 'bio' => '그로스 펀드 총괄. Geodesic Capital 공동 창업자(Airbnb, Confluent, Databricks, Figma, Snapchat, Vercel 투자). Andreessen Horowitz 그로스 스테이지 투자 헤드. Forbes Midas 리스트 다수 선정. UC 샌디에이고 경영과학 학사.'],
                    'es' => ['title' => 'Socio Director — Crecimiento', 'bio' => 'Lidera el Fondo de Crecimiento. Cofundador de Geodesic Capital (inversiones en Airbnb, Confluent, Databricks, Figma, Snapchat, Vercel). Director de Inversión en Etapa de Crecimiento en Andreessen Horowitz. Múltiples reconocimientos en la Lista Forbes Midas. Licenciatura en Ciencias de Gestión de UC San Diego.'],
                    'zh-TW' => ['title' => '管理合夥人——成長', 'bio' => '主導成長基金。Geodesic Capital 共同創辦人（投資 Airbnb、Confluent、Databricks、Figma、Snapchat、Vercel）。Andreessen Horowitz 成長階段投資負責人。多次入選 Forbes Midas 榜單。加州大學聖地牙哥分校管理科學學士。'],
                    'vi' => ['title' => 'Đối tác Điều hành — Tăng trưởng', 'bio' => 'Dẫn đầu Quỹ Tăng trưởng. Đồng sáng lập Geodesic Capital (đầu tư Airbnb, Confluent, Databricks, Figma, Snapchat, Vercel). Trưởng bộ phận Đầu tư Giai đoạn Tăng trưởng tại Andreessen Horowitz. Nhiều lần vào danh sách Forbes Midas. Cử nhân Khoa học Quản lý UC San Diego.'],
                ],
            ],
            [
                'name'         => 'Mike Sho Liu',
                'photo'        => 'team/mike_sho_liu.jpg',
                'title'        => 'General Partner',
                'bio'          => 'Started career in technology M&A at Qatalyst Partners. SV Angel Associate 2014-2016. Co-founded Malibu (social streaming platform, acquired by OpenAI). Four years at Roblox leading product, developer relations, creator feedback, international growth. Stanford bachelor\'s degree (Management Science & Engineering).',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 5,
                'translations' => [
                    'ja' => ['title' => 'ゼネラル・パートナー', 'bio' => 'Qatalyst Partnersのテクノロジーリス＆アクイジションからキャリアをスタート。SVエンジェルアソシエイト（2014-2016年）。Malibu（ソーシャルストリーミングプラットフォーム、OpenAIが買収）共同創業者。Robloxで4年間、製品・デベロッパーリレーションズ・国際成長を主導。スタンフォード大学学士（経営科学・工学）。'],
                    'ko' => ['title' => '제너럴 파트너', 'bio' => 'Qatalyst Partners에서 기술 M&A로 커리어 시작. SV Angel 어소시에이트 2014-2016. Malibu(소셜 스트리밍 플랫폼, OpenAI에 인수) 공동 창업자. Roblox에서 4년간 제품, 개발자 관계, 국제 성장 주도. 스탠퍼드 대학교 학사(경영과학 및 공학).'],
                    'es' => ['title' => 'Socio General', 'bio' => 'Comenzó en fusiones y adquisiciones tecnológicas en Qatalyst Partners. Asociado de SV Angel 2014-2016. Cofundó Malibu (plataforma de streaming social, adquirida por OpenAI). Cuatro años en Roblox liderando producto, relaciones con desarrolladores y crecimiento internacional. Licenciatura en Stanford (Ciencias de Gestión e Ingeniería).'],
                    'zh-TW' => ['title' => '普通合夥人', 'bio' => '在 Qatalyst Partners 從事技術併購起步職業生涯。SV Angel 研究員 2014-2016。共同創辦 Malibu（社交串流平台，已被 OpenAI 收購）。在 Roblox 四年，主導產品、開發者關係與國際成長。史丹佛大學學士（管理科學與工程）。'],
                    'vi' => ['title' => 'Đối tác Chung', 'bio' => 'Bắt đầu sự nghiệp trong M&A công nghệ tại Qatalyst Partners. Cộng tác viên SV Angel 2014-2016. Đồng sáng lập Malibu (nền tảng phát trực tuyến, được OpenAI mua lại). Bốn năm tại Roblox dẫn đầu sản phẩm, quan hệ nhà phát triển và tăng trưởng quốc tế. Cử nhân Stanford (Khoa học Quản lý & Kỹ thuật).'],
                ],
            ],
            [
                'name'         => 'Andrea Wang',
                'photo'        => 'team/andrea_wang.jpg',
                'title'        => 'General Partner',
                'bio'          => 'Joined from General Catalyst (2023-2025) leading seed enterprise investing in SF Bay Area. Led product growth at Amplitude Series D through direct listing. Early Lime employee (seed to Series D). Enjoys ballroom dance, pilates, art. Stanford degrees in Economics and Management Science.',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 6,
                'translations' => [
                    'ja' => ['title' => 'ゼネラル・パートナー', 'bio' => 'General Catalyst（2023-2025年）からSFベイエリアのシードエンタープライズ投資をリードして入社。AmplitudeのシリーズDから直接上場までプロダクト成長を主導。Limeの初期従業員（シードからシリーズD）。社交ダンス、ピラティス、アートを楽しむ。スタンフォード大学経済学・経営科学学位。'],
                    'ko' => ['title' => '제너럴 파트너', 'bio' => 'General Catalyst(2023-2025)에서 SF 베이 에어리어 시드 기업 투자를 주도하며 합류. Amplitude 시리즈 D부터 직접 상장까지 제품 성장 주도. Lime 초기 직원(시드~시리즈 D). 볼룸댄스, 필라테스, 예술 즐김. 스탠퍼드 대학교 경제학 및 경영과학 학위.'],
                    'es' => ['title' => 'Socia General', 'bio' => 'Se unió desde General Catalyst (2023-2025) liderando inversiones iniciales en SF Bay Area. Lideró el crecimiento de productos en Amplitude desde la Serie D hasta la cotización directa. Primera empleada de Lime (desde semilla hasta Serie D). Disfruta del baile de salón, pilates y arte. Títulos de Stanford en Economía y Ciencias de Gestión.'],
                    'zh-TW' => ['title' => '普通合夥人', 'bio' => '從 General Catalyst（2023-2025）加入，主導舊金山灣區種子企業投資。主導 Amplitude 從 D 輪到直接上市的產品成長。Lime 早期員工（種子輪至 D 輪）。喜愛交際舞、普拉提與藝術。史丹佛大學經濟學及管理科學學位。'],
                    'vi' => ['title' => 'Đối tác Chung', 'bio' => 'Gia nhập từ General Catalyst (2023-2025) dẫn đầu đầu tư hạt giống doanh nghiệp tại SF Bay Area. Dẫn đầu tăng trưởng sản phẩm Amplitude từ Series D đến niêm yết trực tiếp. Nhân viên đầu của Lime (hạt giống đến Series D). Thích khiêu vũ ballroom, pilates và nghệ thuật. Bằng Kinh tế học và Khoa học Quản lý Stanford.'],
                ],
            ],
            [
                'name'         => 'Sourav Gupta',
                'photo'        => 'team/sourav_gupta.jpg',
                'title'        => 'Principal',
                'bio'          => 'Five years venture capital and growth equity experience at Insight Partners, TCV, Geodesic Capital. Enterprise, infrastructure, application software focus. University of Chicago B.S. Economics. Las Vegas native. Enjoys tennis, chess, travel.',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 7,
                'translations' => [
                    'ja' => ['title' => 'プリンシパル', 'bio' => 'Insight Partners、TCV、Geodesic Capitalでベンチャーキャピタルとグロースエクイティ5年間の経験。エンタープライズ、インフラ、アプリケーションソフトウェアに注力。シカゴ大学経済学学士。ラスベガス出身。テニス、チェス、旅行を楽しむ。'],
                    'ko' => ['title' => '수석 심사역', 'bio' => 'Insight Partners, TCV, Geodesic Capital에서 5년간 벤처 캐피탈 및 성장 주식 경험. 엔터프라이즈, 인프라, 애플리케이션 소프트웨어 집중. 시카고 대학교 경제학 학사. 라스베이거스 출신. 테니스, 체스, 여행 즐김.'],
                    'es' => ['title' => 'Director de Inversiones', 'bio' => 'Cinco años de experiencia en capital de riesgo y capital de crecimiento en Insight Partners, TCV y Geodesic Capital. Enfoque en software empresarial, infraestructura y aplicaciones. Licenciatura en Economía de la Universidad de Chicago. Originario de Las Vegas. Disfruta del tenis, el ajedrez y los viajes.'],
                    'zh-TW' => ['title' => '主任', 'bio' => '在 Insight Partners、TCV、Geodesic Capital 累積五年創業投資與成長股權經驗。專注於企業軟體、基礎設施與應用軟體。芝加哥大學經濟學學士。拉斯維加斯人。喜愛網球、西洋棋和旅遊。'],
                    'vi' => ['title' => 'Trưởng bộ phận Đầu tư', 'bio' => 'Năm năm kinh nghiệm đầu tư mạo hiểm và cổ phần tăng trưởng tại Insight Partners, TCV, Geodesic Capital. Tập trung phần mềm doanh nghiệp, cơ sở hạ tầng, ứng dụng. Cử nhân Kinh tế Đại học Chicago. Người Las Vegas. Thích quần vợt, cờ vua, du lịch.'],
                ],
            ],
            [
                'name'         => 'Zachary Miller',
                'photo'        => 'team/zachary_miller.jpg',
                'title'        => 'COO',
                'bio'          => 'Corporate attorney at Latham & Watkins (San Francisco). Outside-GC for RentJuice (Zillow acquisition), tenXer (Twitter acquisition). Co-founded Cadence Counsel (legal staffing). COO of A.Capital (2014). UCLA B.A. Communication Studies; University of Arizona J.D. Summa Cum Laude.',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 8,
                'translations' => [
                    'ja' => ['title' => 'COO（最高執行責任者）', 'bio' => 'Latham & Watkins（サンフランシスコ）の企業弁護士。RentJuice（Zillow買収）、tenXer（Twitter買収）の外部ゼネラルカウンセル。Cadence Counsel（法律スタッフィング）共同創業者。A.Capital COO（2014年）。UCLA コミュニケーション学学士、アリゾナ大学法学博士（最優秀）。'],
                    'ko' => ['title' => '최고운영책임자(COO)', 'bio' => 'Latham & Watkins(샌프란시스코) 기업 변호사. RentJuice(Zillow 인수), tenXer(Twitter 인수) 외부 법무 총괄. Cadence Counsel(법률 인력 파견) 공동 창업자. A.Capital COO(2014). UCLA 커뮤니케이션학 학사, 애리조나 대학교 법학 박사(최우등).'],
                    'es' => ['title' => 'Director de Operaciones', 'bio' => 'Abogado corporativo en Latham & Watkins (San Francisco). Asesor legal externo de RentJuice (adquisición por Zillow), tenXer (adquisición por Twitter). Cofundó Cadence Counsel (personal legal). COO de A.Capital (2014). Licenciatura en Estudios de Comunicación en UCLA; J.D. Summa Cum Laude en la Universidad de Arizona.'],
                    'zh-TW' => ['title' => '首席營運長', 'bio' => 'Latham & Watkins（舊金山）企業律師。RentJuice（被 Zillow 收購）、tenXer（被 Twitter 收購）外部總法律顧問。Cadence Counsel（法律人力）共同創辦人。A.Capital 首席營運長（2014）。UCLA 傳播學學士；亞利桑那大學法學博士（最高榮譽）。'],
                    'vi' => ['title' => 'Giám đốc Vận hành', 'bio' => 'Luật sư doanh nghiệp tại Latham & Watkins (San Francisco). Cố vấn pháp lý ngoài cho RentJuice (Zillow mua lại), tenXer (Twitter mua lại). Đồng sáng lập Cadence Counsel (nhân sự pháp lý). COO của A.Capital (2014). Cử nhân Nghiên cứu Truyền thông UCLA; Tiến sĩ Luật Summa Cum Laude Đại học Arizona.'],
                ],
            ],
            [
                'name'         => 'Aashai Avadhani',
                'photo'        => 'team/aashai_avadhani.jpg',
                'title'        => 'AI Lead',
                'bio'          => 'Several years at Adobe evaluating/post-training text-to-image and text-to-video models for Adobe Firefly. Specializes in LLM evaluations, fine-tuning, multimodal AI systems. San Francisco native. Carnegie Mellon B.S. Statistics & Machine Learning; University of Chicago M.S. Applied Data Science.',
                'order'        => 9,
                'translations' => [
                    'ja' => ['title' => 'AIリード', 'bio' => 'AdobeでAdobe Fireflyのテキストtoイメージ・テキストtoビデオモデルの評価・事後学習に複数年従事。LLM評価、ファインチューニング、マルチモーダルAIシステムを専門とする。サンフランシスコ出身。カーネギーメロン大学統計・機械学習学士、シカゴ大学応用データサイエンス修士。'],
                    'ko' => ['title' => 'AI 리드', 'bio' => 'Adobe Firefly의 텍스트-이미지 및 텍스트-비디오 모델 평가/사후 학습에 Adobe에서 수년간 종사. LLM 평가, 파인튜닝, 멀티모달 AI 시스템 전문. 샌프란시스코 출신. 카네기 멜론 대학교 통계 및 머신러닝 학사; 시카고 대학교 응용 데이터 과학 석사.'],
                    'es' => ['title' => 'Líder de IA', 'bio' => 'Varios años en Adobe evaluando y entrenando modelos de texto a imagen y texto a video para Adobe Firefly. Especialista en evaluaciones de LLM, ajuste fino y sistemas de IA multimodal. Nativo de San Francisco. Licenciatura en Estadística y Aprendizaje Automático en Carnegie Mellon; Maestría en Ciencias de Datos Aplicadas en la Universidad de Chicago.'],
                    'zh-TW' => ['title' => 'AI 主管', 'bio' => '在 Adobe 任職多年，負責評估與後訓練 Adobe Firefly 文字轉圖像及文字轉影片模型。專精 LLM 評估、微調與多模態 AI 系統。舊金山人。卡內基美隆大學統計與機器學習學士；芝加哥大學應用數據科學碩士。'],
                    'vi' => ['title' => 'Trưởng bộ phận AI', 'bio' => 'Nhiều năm tại Adobe đánh giá/huấn luyện sau các mô hình văn bản-hình ảnh và văn bản-video cho Adobe Firefly. Chuyên về đánh giá LLM, tinh chỉnh, hệ thống AI đa phương thức. Người San Francisco. Cử nhân Thống kê & Học máy Carnegie Mellon; Thạc sĩ Khoa học Dữ liệu Ứng dụng Đại học Chicago.'],
                ],
            ],
            [
                'name'         => 'Paulina Briones',
                'photo'        => 'team/paulina_briones.jpg',
                'title'        => 'Executive Assistant',
                'bio'          => 'Provides support to Topher Conway and firm. Seven+ years experience in mid-startups and corporations. Previous roles: family office, Postmates, Twitter, Greenoaks. First-generation college student; psychology degree from Dominican University of California. Mexican-immigrant daughter; Marin County native.',
                'linkedin_url' => 'https://linkedin.com',
                'order'        => 10,
                'translations' => [
                    'ja' => ['title' => 'エグゼクティブ・アシスタント', 'bio' => 'トファー・コンウェイとファームをサポート。中規模スタートアップと企業での7年以上の経験。ファミリーオフィス、Postmates、Twitter、Greenoaks等を経験。ファーストジェネレーション大学生として、カリフォルニア・ドミニカン大学で心理学の学位を取得。メキシコ移民の娘、マリン郡出身。'],
                    'ko' => ['title' => '임원 비서', 'bio' => 'Topher Conway와 회사를 지원. 중규모 스타트업과 기업에서 7년 이상 경험. 패밀리 오피스, Postmates, Twitter, Greenoaks 근무 이력. 1세대 대학생으로 Dominican University of California에서 심리학 학위 취득. 멕시코 이민자의 딸; 마린 카운티 출신.'],
                    'es' => ['title' => 'Asistente Ejecutiva', 'bio' => 'Brinda apoyo a Topher Conway y la firma. Más de siete años de experiencia en medianas empresas emergentes y corporaciones. Roles anteriores: family office, Postmates, Twitter, Greenoaks. Estudiante universitaria de primera generación; título en psicología de la Universidad Dominican de California. Hija de inmigrante mexicana; nativa del condado de Marin.'],
                    'zh-TW' => ['title' => '行政助理', 'bio' => '為 Topher Conway 及公司提供支援。七年以上在中型新創公司與企業的工作經驗。曾任職家族辦公室、Postmates、Twitter、Greenoaks。第一代大學生，畢業於加州多明尼加大學心理學系。墨西哥移民之女；加利福尼亞州馬林縣人。'],
                    'vi' => ['title' => 'Trợ lý Điều hành', 'bio' => 'Hỗ trợ Topher Conway và công ty. Hơn bảy năm kinh nghiệm tại các công ty khởi nghiệp và tập đoàn. Vai trò trước: văn phòng gia đình, Postmates, Twitter, Greenoaks. Sinh viên đại học thế hệ đầu; bằng tâm lý học Đại học Dominican California. Con gái người nhập cư Mexico; người Marin County.'],
                ],
            ],
            [
                'name'         => 'Diana Duane',
                'photo'        => 'team/diana_duane.jpg',
                'title'        => 'Office Manager',
                'bio'          => 'Oversees operational efficiency. Previously New Market Expansion Coordinator at Side (expanded from 3 to 12 states in 7 months). Worked at Corcoran Global Living as referral agent/marketing associate. Germany-born; Marin County raised.',
                'order'        => 11,
                'translations' => [
                    'ja' => ['title' => 'オフィスマネージャー', 'bio' => '業務効率を管理・監督。前職ではSideのNew Market Expansion Coordinator（7ヶ月で3州から12州に拡大）。Corcoran Global Livingでリファラルエージェント・マーケティングアシスタントとして勤務。ドイツ生まれ、マリン郡育ち。'],
                    'ko' => ['title' => '오피스 매니저', 'bio' => '운영 효율성 감독. 이전에는 Side의 신규 시장 확장 코디네이터(7개월 만에 3개 주에서 12개 주로 확장). Corcoran Global Living에서 소개 에이전트/마케팅 어소시에이트 근무. 독일 출생; 마린 카운티에서 성장.'],
                    'es' => ['title' => 'Gerente de Oficina', 'bio' => 'Supervisa la eficiencia operativa. Anteriormente Coordinadora de Expansión a Nuevos Mercados en Side (expansión de 3 a 12 estados en 7 meses). Trabajó en Corcoran Global Living como agente de referidos/asistente de marketing. Nacida en Alemania; criada en el condado de Marin.'],
                    'zh-TW' => ['title' => '辦公室主任', 'bio' => '負責監督運營效率。曾任 Side 新市場拓展協調員（在 7 個月內從 3 個州擴展到 12 個州）。曾任 Corcoran Global Living 推薦代理人/行銷助理。德國出生；在馬林縣長大。'],
                    'vi' => ['title' => 'Quản lý Văn phòng', 'bio' => 'Giám sát hiệu quả vận hành. Trước đây là Điều phối viên Mở rộng Thị trường Mới tại Side (mở rộng từ 3 đến 12 tiểu bang trong 7 tháng). Làm việc tại Corcoran Global Living với tư cách đại lý giới thiệu/trợ lý tiếp thị. Sinh tại Đức; lớn lên ở Marin County.'],
                ],
            ],
        ];

        foreach ($members as $m) {
            TeamMember::create(array_merge($m, ['is_active' => true]));
        }
    }
}
