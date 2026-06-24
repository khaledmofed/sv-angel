<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['question'=>'What stage do you invest in?','answer'=>'We invest at both Seed and Growth stages, backing founders from their earliest days through significant scale.','order'=>1],
            ['question'=>'What sectors do you focus on?','answer'=>'Our portfolio spans AI, Consumer, Crypto, Enterprise, Fintech, Healthcare + Bio, and Marketplaces.','order'=>2],
            ['question'=>'How do I get in touch?','answer'=>'Reach out through our contact page. We read every message and respond to those that align with our investment thesis.','order'=>3],
            ['question'=>'What is your investment philosophy?','answer'=>'World-changing companies start with meaningful relationships. We are advocates for founders — hyper-engaged, founder-focused, and community-oriented.','order'=>4],
            ['question'=>'Where are you based?','answer'=>'We are based in San Francisco, CA and have been investing in Bay Area companies since the 1990s.','order'=>5],
            ['question'=>'How long have you been investing?','answer'=>'Ron Conway has been an active angel investor since the mid-1990s. SV Angel was formally established as a fund and has been investing for over 30 years.','order'=>6],
        ];
        foreach ($items as $i) {
            Faq::updateOrCreate(['question'=>$i['question']], array_merge($i, ['is_active'=>true]));
        }
    }
}
