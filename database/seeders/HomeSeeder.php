<?php

namespace Database\Seeders;
use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'title'     =>'Welcome to MySchool',
            'subtitle'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image'     => 'image.jpg',
            'facebook'     => 'https://web.facebook.com/',
            'twitter'     => 'https://twitter.com/home',
            'instagram'     => 'https://www.instagram.com/',
        ]);
    }
}
