<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Kurumsal Web Sitesi',
                'image' => 'uploads/img/service/services_img01.jpg',
                'icon' => 'uploads/img/service/services_icon01.png',
                'desc' => 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.
It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.',
                'short_desc' => 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.',
                'slug' => 'kurumsal-web-sitesi',
            ],
            [
                'title' => 'E-ticaret Web Sitesi',
                'image' => 'uploads/img/service/services_img02.jpg',
                'icon' => 'uploads/img/service/services_icon02.png',
                'desc' => 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.
It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.',
                'short_desc' => 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.',
                'slug' => 'e-ticaret-web-sitesi',
            ],
            [
                'title' => 'Blog Web Sitesi',
                'image' => 'uploads/img/service/services_img03.jpg',
                'icon' => 'uploads/img/service/services_icon03.png',
                'desc' => 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.
It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.',
                'short_desc' => 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.',
                'slug' => 'blog-web-sitesi',
            ],
            [
                'title' => 'Personel Web Sitesi',
                'image' => 'uploads/img/service/services_img04.jpg',
                'icon' => 'uploads/img/service/services_icon04.png',
                'desc' => 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.
It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.',
                'short_desc' => 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.',
                'slug' => 'personel-web-sitesi',
            ],
        ];

        foreach ($services as $service){
            Service::create($service);
        }
    }
}
