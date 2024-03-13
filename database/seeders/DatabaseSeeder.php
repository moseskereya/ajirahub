<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Scott',
        //     'email' => 'me@scottcate.com',
        // ]);
         // Seed the cities table

         $cites = [
            ['name' => 'Dar es Salaam'],
            ['name' => 'Dodoma'],
            ['name' => 'Arusha'],
            ['name' => 'Mwanza'],
            ['name' => 'Zanzibar City'],
         ];
           DB::table('cities')->insert($cites);

         $categories = [
            ['name' => 'Information Technology', 'slug' => 'information-technology'],
            ['name' => 'Healthcare', 'slug' => 'healthcare'],
            ['name' => 'Finance', 'slug' => 'finance'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Engineering', 'slug' => 'engineering'],
            ['name' => 'Marketing', 'slug' => 'marketing'],
            ['name' => 'Human Resources', 'slug' => 'human-resources'],
            ['name' => 'Sales', 'slug' => 'sales'],
            ['name' => 'Customer Service', 'slug' => 'customer-service'],
            ['name' => 'Design', 'slug' => 'design'],
        ];
        
        DB::table('categories')->insert($categories);
        

        $companies = [
            [
                'name' => 'Tech Innovators Ltd',
                'website' => 'http://www.techinnovators.com',
                'email' => 'info@techinnovators.com',
                'estblished_date' => '2005-03-15',
                'team_size' => '250',
                'phone' => '555-123-4567',
                'address' => '42 Silicon Valley, Tech City',
                'logo' => 'techinnovators_logo.png',
                'industry' => 'Information Technology',
                'about' => 'We are at the forefront of technological innovation, providing cutting-edge solutions to our clients.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Green Energy Solutions',
                'website' => 'http://www.greenenergy.com',
                'email' => 'info@greenenergy.com',
                'estblished_date' => '2008-06-20',
                'team_size' => '150',
                'phone' => '777-987-6543',
                'address' => '18 Renewable Street, Eco City',
                'logo' => 'greenenergy_logo.png',
                'industry' => 'Renewable Energy',
                'about' => 'Our mission is to provide sustainable and eco-friendly energy solutions to power the future.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            'name' => 'Healthcare Solutions Ltd',
            'website' => 'http://www.healthsolutions.com',
            'email' => 'info@healthsolutions.com',
            'estblished_date' => '2010-12-10',
            'team_size' => '120',
            'phone' => '888-456-7890',
            'address' => '78 Wellness Avenue, Med City',
            'logo' => 'healthsolutions_logo.png',
            'industry' => 'Healthcare',
            'about' => 'Dedicated to providing innovative healthcare solutions to improve lives and well-being.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'FoodTech Ventures',
            'website' => 'http://www.foodtechventures.com',
            'email' => 'info@foodtechventures.com',
            'estblished_date' => '2012-08-25',
            'team_size' => '80',
            'phone' => '999-876-5432',
            'address' => '32 Culinary Street, Food City',
            'logo' => 'foodtechventures_logo.png',
            'industry' => 'Food Technology',
            'about' => 'Pioneering the future of food through innovative and sustainable food technologies.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Fashion Trends Co.',
            'website' => 'http://www.fashiontrends.com',
            'email' => 'info@fashiontrends.com',
            'estblished_date' => '2015-05-05',
            'team_size' => '200',
            'phone' => '777-333-1111',
            'address' => '55 Style Boulevard, Trend City',
            'logo' => 'fashiontrends_logo.png',
            'industry' => 'Fashion',
            'about' => 'Setting global fashion trends with style, creativity, and passion.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ] ;

     DB::table('companies')->insert($companies);
    }
}
