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
            ['name'=>'Ron Conway',        'photo'=>'team/ron_conway.jpg',         'title'=>'Founder and Managing Partner',   'bio'=>'Founded SV Angel; active angel investor since mid-90s. Former exec at National Semiconductor (1973-1979), co-founder/President/CEO of Altos Computer Systems (1979-1990, went public 1982). Vanity Fair\'s 100 most influential in Information Age; TechCrunch Best Angel Award; Forbes Midas list since 2011. Giving Pledge member; major donor to UCSF Medical Center. Gun violence prevention advocate.','twitter_url'=>'https://twitter.com/RonConway','order'=>1],
            ['name'=>'Ronny Conway',      'photo'=>'team/ronny_conway.jpg',       'title'=>'Managing Partner',               'bio'=>'Early-stage investing focus throughout career. First Partner at Andreessen Horowitz leading seed/early-stage investing (Airbnb, Instagram, Optimizely, Pinterest, Dollar Shave Club, Twitter). Six years at Google; early Google Ventures employee. Founded A.Capital in 2014 investing in Notion, Hugging Face, Replit, Databricks, Character.ai. UCLA bachelor\'s degree.','linkedin_url'=>'https://linkedin.com','order'=>2],
            ['name'=>'Topher Conway',     'photo'=>'team/topher_conway.jpg',      'title'=>'Managing Partner',               'bio'=>'Joined SV Angel 2009 from business development/sales background. Works closely with OpenAI, Rippling, Hugging Face, Notion, Stripe, Anduril, Mercury, Sierra, TogetherAI, Coinbase, DoorDash. Multiple Forbes Midas and Midas Seed list recognitions. UCLA bachelor\'s degree.','twitter_url'=>'https://twitter.com/topherc','linkedin_url'=>'https://linkedin.com','order'=>3],
            ['name'=>'Ashvin Bachireddy','photo'=>'team/ashvin_bachireddy.jpg',   'title'=>'Managing Partner - Growth',      'bio'=>'Leads Growth Fund. Co-founder Geodesic Capital (Airbnb, Confluent, Databricks, Figma, Snapchat, Vercel investments). Head of Growth Stage Investing at Andreessen Horowitz. Multiple Forbes Midas List recognitions. UC San Diego B.S. Management Science.','twitter_url'=>'https://twitter.com/ashvinb','linkedin_url'=>'https://linkedin.com','order'=>4],
            ['name'=>'Mike Sho Liu',      'photo'=>'team/mike_sho_liu.jpg',       'title'=>'General Partner',                'bio'=>'Started career in technology M&A at Qatalyst Partners. SV Angel Associate 2014-2016. Co-founded Malibu (social streaming platform, acquired by OpenAI). Four years at Roblox leading product, developer relations, creator feedback, international growth. Stanford bachelor\'s degree (Management Science & Engineering).','linkedin_url'=>'https://linkedin.com','order'=>5],
            ['name'=>'Andrea Wang',       'photo'=>'team/andrea_wang.jpg',        'title'=>'General Partner',                'bio'=>'Joined from General Catalyst (2023-2025) leading seed enterprise investing in SF Bay Area. Led product growth at Amplitude Series D through direct listing. Early Lime employee (seed to Series D). Enjoys ballroom dance, pilates, art. Stanford degrees in Economics and Management Science.','linkedin_url'=>'https://linkedin.com','order'=>6],
            ['name'=>'Sourav Gupta',      'photo'=>'team/sourav_gupta.jpg',       'title'=>'Principal',                      'bio'=>'Five years venture capital and growth equity experience at Insight Partners, TCV, Geodesic Capital. Enterprise, infrastructure, application software focus. University of Chicago B.S. Economics. Las Vegas native. Enjoys tennis, chess, travel.','linkedin_url'=>'https://linkedin.com','order'=>7],
            ['name'=>'Zachary Miller',    'photo'=>'team/zachary_miller.jpg',     'title'=>'COO',                            'bio'=>'Corporate attorney at Latham & Watkins (San Francisco). Outside-GC for RentJuice (Zillow acquisition), tenXer (Twitter acquisition). Co-founded Cadence Counsel (legal staffing). COO of A.Capital (2014). UCLA B.A. Communication Studies; University of Arizona J.D. Summa Cum Laude.','linkedin_url'=>'https://linkedin.com','order'=>8],
            ['name'=>'Aashai Avadhani',   'photo'=>'team/aashai_avadhani.jpg',   'title'=>'AI Lead',                        'bio'=>'Several years at Adobe evaluating/post-training text-to-image and text-to-video models for Adobe Firefly. Specializes in LLM evaluations, fine-tuning, multimodal AI systems. San Francisco native. Carnegie Mellon B.S. Statistics & Machine Learning; University of Chicago M.S. Applied Data Science.','order'=>9],
            ['name'=>'Paulina Briones',   'photo'=>'team/paulina_briones.jpg',   'title'=>'Executive Assistant',            'bio'=>'Provides support to Topher Conway and firm. Seven+ years experience in mid-startups and corporations. Previous roles: family office, Postmates, Twitter, Greenoaks. First-generation college student; psychology degree from Dominican University of California. Mexican-immigrant daughter; Marin County native.','linkedin_url'=>'https://linkedin.com','order'=>10],
            ['name'=>'Diana Duane',       'photo'=>'team/diana_duane.jpg',        'title'=>'Office Manager',                 'bio'=>'Oversees operational efficiency. Previously New Market Expansion Coordinator at Side (expanded from 3 to 12 states in 7 months). Worked at Corcoran Global Living as referral agent/marketing associate. Germany-born; Marin County raised.','order'=>11],
        ];

        foreach ($members as $m) {
            TeamMember::create(array_merge($m, ['is_active' => true]));
        }
    }
}
