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
                'number'          => '01',
                'title'           => 'The SV Angel story',
                'description'     => "SV Angel grew out of my personal style of investing — hyper-engaged, founder-focused, and community-oriented. Codifying that strategy has helped SV Angel build some of the most iconic companies of our time.\n\nAcross our work with Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest and more, we've seen everything that can go wrong — and right — in company-building, and we share that experience to help founders when it matters most.",
                'image'           => 'about_stories/ron_and_topher.jpg',
                'image_link'      => null,
                'second_image'    => null,
                'second_image_url'=> null,
                'second_image_link'=> null,
                'signature'       => '— Ron Conway',
                'order'           => 1,
                'is_active'       => true,
            ],
            [
                'number'          => '02',
                'title'           => 'Pushing progress over time',
                'description'     => "From the earliest days of Silicon Valley to today's generation of transformative startups, SV Angel has been at the forefront of venture investing for over 30 years. What started as Ron Conway's personal investing philosophy became a firm built around one mission: helping the best founders build the most important companies.\n\nWe look forward to the next 30 years of SV Angel, supporting you and future generations of founders.",
                'image'           => 'about_stories/team_group.png',
                'image_link'      => null,
                'second_image'    => null,
                'second_image_url'=> null,
                'second_image_link'=> null,
                'signature'       => null,
                'order'           => 2,
                'is_active'       => true,
            ],
            [
                'number'          => '04',
                'title'           => 'Our work is never finished',
                'description'     => "We're proud of our history, and we're even more excited about the future. As the pace of change continues to accelerate, we're tracking each new sector as well as the bright minds leading the charge.\n\nHere's what doesn't change: we're here in service of founders, upholding a moral standard in the ecosystem to ensure that technology is a force for good.",
                'image'           => 'about_stories/8hgohsE3lfGAxL6WwEaINCdxuc3BIpAqZtsjLQmk.jpg',
                'image_link'      => null,
                'second_image'    => null,
                'second_image_url'=> null,
                'second_image_link'=> null,
                'signature'       => null,
                'order'           => 3,
                'is_active'       => true,
            ],
            [
                'number'          => '03',
                'title'           => 'Building a better world',
                'description'     => "A primary motivator for our work is to shape a more just and equitable society. At SV Angel, we support causes including racial justice, access to healthcare, and reducing income inequality and gun violence.\n\nWe support The Giving Pledge, and we helped launch sf.citi to leverage the collective power of the tech sector as a force for civic action in San Francisco. When founders join our network, we strongly encourage them to contribute to the betterment of the world around us.",
                'image'           => 'about_stories/sf_city.jpg',
                'image_link'      => 'https://sfciti.org/',
                'second_image'    => null,
                'second_image_url'=> 'https://images.ctfassets.net/9546dfueqxy5/JacF7rq7Lc4wI4JNfLCq5/bfcc065c3ff4956a0cbf71b7360bc5bf/charity_card_pledge.png?w=1920&q=75',
                'second_image_link'=> 'https://www.pledge1percent.org/',
                'signature'       => null,
                'order'           => 4,
                'is_active'       => true,
            ],
        ];

        foreach ($stories as $s) {
            AboutStory::create($s);
        }
    }
}
