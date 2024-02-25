<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data=[
            [
                'google'=>'swadhinmojumder1@gmail.com',
                'contect_number'=>'01629886975',
                'email'=>'swadhinmojumder1@gmail.com',
                'address'=>'swadhinmojumder1@gmail.com',
                'facebook'=>'https://www.facebook.com/?ref=homescreenpwa',
                'twiter'=>'https://twitter.com/?lang=en',
                'instagram'=>'https://www.instagram.com/',
                'about'=>'so that the most recent post appears first, at the top of the web page.',

            ],

        ];
        setting::insert( $all_data);
    }
}
