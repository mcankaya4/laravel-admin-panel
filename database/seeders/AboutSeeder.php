<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'I have transform your ideas into remarkable digital products',
            'short_title' => '20+ Years Experience In this game, Means Product Designing',
            'short_desc' => 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',
            'desc' => 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',
            'skill_id' => 1,
            'image' => 'uploads/img/about/about_img.png',
            'page_title' => 'About Page',
            'page_desc' => 'About Desc',
            'page_key' => 'about, hakkımda, php, laravel, js, css, html, backend, frontend...',
        ]);
    }
}
