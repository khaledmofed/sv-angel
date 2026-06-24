<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostsSeeder extends Seeder
{
    public function run(): void
    {
        BlogPost::truncate();

        $posts = [
            [
                'title'            => 'Ron Conway on The Social Radars Podcast with Jessica Livingston and Carolynn Levy',
                'slug'             => 'ron-conway-social-radars-podcast',
                'excerpt'          => 'Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast to discuss the early days of Silicon Valley investing and what it takes to back world-changing founders.',
                'content'          => '<p>Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast to discuss the early days of Silicon Valley investing, the principles behind SV Angel, and what it takes to back world-changing founders.</p><p><a href="https://pod.link/1677066062/episode/fb9d96d261aa5b545ce9271b4dbe10f0" target="_blank" rel="noopener noreferrer">Listen to the full episode →</a></p>',
                'featured_image'   => 'blog/ron_and_jessica.jpg',
                'category'         => 'Podcast',
                'author'           => 'SV Angel',
                'read_time'        => 'Listen',
                'status'           => 'published',
                'external_url'     => 'https://pod.link/1677066062/episode/fb9d96d261aa5b545ce9271b4dbe10f0',
                'published_at'     => '2023-06-01',
                'meta_title'       => 'Ron Conway on The Social Radars Podcast with Jessica Livingston and Carolynn Levy',
                'meta_description' => 'Ron Conway joins Jessica Livingston and Carolynn Levy on The Social Radars Podcast to discuss the early days of Silicon Valley investing and what it takes to back world-changing founders.',
            ],
            [
                'title'            => 'Airbnb — Ron Conway and the Economic Empowerment Award',
                'slug'             => 'airbnb-ron-conway-economic-empowerment-award',
                'excerpt'          => 'Airbnb recognizes Ron Conway with the Economic Empowerment Award for his decades-long commitment to building a more inclusive and equitable technology ecosystem.',
                'content'          => '<p>Airbnb recognizes Ron Conway with the Economic Empowerment Award for his decades-long commitment to building a more inclusive and equitable technology ecosystem.</p><p><a href="https://news.airbnb.com/ron-conway-and-the-economic-empowerment-award/" target="_blank" rel="noopener noreferrer">Read the full story →</a></p>',
                'featured_image'   => 'blog/airbnb_economic_empowerment.jpg',
                'category'         => 'Press',
                'author'           => 'Airbnb Newsroom',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://news.airbnb.com/ron-conway-and-the-economic-empowerment-award/',
                'published_at'     => '2022-11-01',
                'meta_title'       => 'Airbnb — Ron Conway and the Economic Empowerment Award',
                'meta_description' => 'Airbnb recognizes Ron Conway with the Economic Empowerment Award for his decades-long commitment to building a more inclusive and equitable technology ecosystem.',
            ],
            [
                'title'            => 'Ron Conway and the Economic Empowerment Award: A message from Pinterest Co-Founder and CEO Ben Silbermann',
                'slug'             => 'ron-conway-economic-empowerment-award-ben-silbermann',
                'excerpt'          => 'Pinterest Co-Founder and CEO Ben Silbermann shares a personal message about Ron Conway\'s impact on founders and the broader technology community.',
                'content'          => '<p>Pinterest Co-Founder and CEO Ben Silbermann shares a personal message about Ron Conway\'s profound impact on founders and the broader technology community — and why the Economic Empowerment Award is so fitting.</p><p><a href="https://www.linkedin.com/pulse/ron-conway-economic-empowerment-award-ben-silbermann/" target="_blank" rel="noopener noreferrer">Read on LinkedIn →</a></p>',
                'featured_image'   => 'blog/ben_silbermann_bw.jpg',
                'category'         => 'Press',
                'author'           => 'Ben Silbermann',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://www.linkedin.com/pulse/ron-conway-economic-empowerment-award-ben-silbermann/',
                'published_at'     => '2022-10-01',
                'meta_title'       => 'Ron Conway and the Economic Empowerment Award: A message from Pinterest Co-Founder and CEO Ben Silbermann',
                'meta_description' => 'Pinterest Co-Founder and CEO Ben Silbermann shares a personal message about Ron Conway\'s impact on founders and the broader technology community.',
            ],
            [
                'title'            => 'Airbnb & DoorDash: Honored to Be Part of Their Journey',
                'slug'             => 'airbnb-doordash-honored-to-be-part-of-their-journey',
                'excerpt'          => 'SV Angel reflects on being part of the Airbnb and DoorDash journeys — two companies that redefined their industries and went public on the same day.',
                'content'          => '<p>SV Angel reflects on being part of the Airbnb and DoorDash journeys — two companies that redefined their industries and went public on the same historic day in December 2020.</p><p>Both companies embody what we look for in founders: resilience, long-term thinking, and a genuine belief in the product they\'re building.</p>',
                'featured_image'   => 'blog/airbnb_doordash.jpg',
                'category'         => 'Portfolio',
                'author'           => 'SV Angel',
                'read_time'        => 'Listen',
                'status'           => 'published',
                'external_url'     => null,
                'published_at'     => '2020-12-10',
                'meta_title'       => 'Airbnb & DoorDash: Honored to Be Part of Their Journey',
                'meta_description' => 'SV Angel reflects on being part of the Airbnb and DoorDash journeys — two companies that redefined their industries and went public on the same day.',
            ],
            [
                'title'            => 'Ron Conway Explained',
                'slug'             => 'ron-conway-explained',
                'excerpt'          => 'A profile of Ron Conway — Silicon Valley\'s most prolific angel investor — exploring his investing philosophy, network, and decades of impact.',
                'content'          => '<p>A profile of Ron Conway exploring his investing philosophy, network, and decades of impact on the technology ecosystem.</p><p><a href="https://a16z.com/2010/04/06/ron-conway-explained/" target="_blank">Read on a16z →</a></p>',
                'featured_image'   => 'blog/ron_conway_explained.jpg',
                'category'         => 'Press',
                'author'           => 'Andreessen Horowitz',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://a16z.com/2010/04/06/ron-conway-explained/',
                'published_at'     => '2010-04-06',
                'meta_title'       => 'Ron Conway Explained',
                'meta_description' => 'A profile of Ron Conway — Silicon Valley\'s most prolific angel investor — exploring his investing philosophy, network, and decades of impact.',
            ],
            [
                'title'            => 'SV Angel Speaker Series: Bill Gates in Conversation with Ron Conway',
                'slug'             => 'sva-speaker-series-bill-gates-ron-conway',
                'excerpt'          => 'SV Angel hosted a private Speaker Series conversation between Bill Gates and Ron Conway covering technology, philanthropy, and the future of innovation.',
                'content'          => '<p>SV Angel hosted a private Speaker Series conversation between Bill Gates and Ron Conway, covering technology, philanthropy, and the future of innovation.</p><p><a href="https://svangel.medium.com/sva-speaker-series-bill-gates-in-conversation-with-ron-conway-c30ad142963b" target="_blank">Read on Medium →</a></p>',
                'featured_image'   => 'blog/bill_gates_ron_conway.jpg',
                'category'         => 'Speaker Series',
                'author'           => 'SV Angel',
                'read_time'        => 'Read',
                'status'           => 'published',
                'external_url'     => 'https://svangel.medium.com/sva-speaker-series-bill-gates-in-conversation-with-ron-conway-c30ad142963b',
                'published_at'     => '2021-05-01',
                'meta_title'       => 'SV Angel Speaker Series: Bill Gates in Conversation with Ron Conway',
                'meta_description' => 'SV Angel hosted a private Speaker Series conversation between Bill Gates and Ron Conway covering technology, philanthropy, and the future of innovation.',
            ],
        ];

        foreach ($posts as $p) {
            BlogPost::create($p);
        }
    }
}
