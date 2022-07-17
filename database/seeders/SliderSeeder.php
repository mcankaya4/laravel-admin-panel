<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title' => 'I will give you Best Product in the shortest time.',
            'desc' => "I'm a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences",
            'video_url' => 'https://google.com',
            'image' => 'uploads/img/slider/about_img.png',
        ]);
    }
}
