<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Award;

class AwardsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['project_name'=>'Grateful for diversity','award_name'=>'Awwwards SOTD','year'=>'2025','order'=>1],
            ['project_name'=>'Lost in dance','award_name'=>'Awwwards SOTD','year'=>'2024','order'=>2],
            ['project_name'=>'Grateful for diversity','award_name'=>'CSS Design Awards','year'=>'2024','order'=>3],
            ['project_name'=>'Lost in dance','award_name'=>'Webflow Showcase','year'=>'2023','order'=>4],
            ['project_name'=>'Kaili Swimwear Website','award_name'=>'Awwwards Developer Award','year'=>'2021','order'=>5],
        ];
        foreach ($items as $i) {
            Award::updateOrCreate(['project_name'=>$i['project_name'],'year'=>$i['year']], array_merge($i, ['is_active'=>true]));
        }
    }
}
