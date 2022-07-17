<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title' => '24 hours Control room landing page',
            'desc' => 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.',
            'image' => 'uploads/img/portfolio/portfolio_img01.jpeg',
            'category_id' => 0,
            'slug' => '24-hours-control-room-landing-page'
        ]);
    }
}
