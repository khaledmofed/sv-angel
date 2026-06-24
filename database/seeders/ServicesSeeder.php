<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['number'=>'01','title'=>'Branding Identity','description'=>'We craft distinctive brand identities that resonate with your audience, ensuring your business stands out in a crowded market.','items'=>['Logo & Visual Identity','Brand Guidelines','Art Direction'],'order'=>1],
            ['number'=>'02','title'=>'Web Development','description'=>'Building fast, responsive, and scalable websites and applications tailored to your business needs and user experience goals.','items'=>['Responsive Web Design','Custom Web Applications','CMS Development'],'order'=>2],
            ['number'=>'03','title'=>'UI/UX Design','description'=>'Creating seamless, intuitive, and visually appealing interfaces that enhance user engagement and satisfaction.','items'=>['User Research & Analysis','Wireframes & Prototypes','Interactive UI Design'],'order'=>3],
            ['number'=>'04','title'=>'Digital Marketing','description'=>'Driving growth through targeted campaigns, SEO, and social media strategies that convert visitors into loyal customers.','items'=>['SEO & SEM','Social Media Marketing','Content Strategy'],'order'=>4],
        ];
        foreach ($items as $i) {
            Service::updateOrCreate(['title'=>$i['title']], array_merge($i, ['is_active'=>true]));
        }
    }
}
