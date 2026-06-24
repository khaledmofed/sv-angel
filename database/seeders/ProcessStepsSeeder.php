<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProcessStep;

class ProcessStepsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['number'=>'001','title'=>'Discovery and Strategy','description'=>'We begin by understanding your business goals, target audience, and industry landscape to craft a strategic roadmap tailored for success.','order'=>1],
            ['number'=>'002','title'=>'Design and Development','description'=>'Our creative team translates strategy into compelling designs and functional solutions, ensuring a seamless user experience across all platforms.','order'=>2],
            ['number'=>'003','title'=>'Implementation and Execution','description'=>'We deploy solutions efficiently, coordinating development, testing, and launch while keeping your team informed every step of the way.','order'=>3],
            ['number'=>'004','title'=>'Optimization and Growth','description'=>'Post-launch, we monitor performance, analyze results, and optimize strategies to ensure sustainable growth and measurable impact.','order'=>4],
        ];
        foreach ($items as $i) {
            ProcessStep::updateOrCreate(['number'=>$i['number']], $i);
        }
    }
}
