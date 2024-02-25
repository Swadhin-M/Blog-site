<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\gallary;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data=[
            [
                'Name'=>'News',

            ],
            [
                'Name'=>'Populer',

            ],
            [
                'Name'=>'Tranding',

            ],
        ];
        gallary::insert( $all_data);
    }
}
