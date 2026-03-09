<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorys = [
            [
                'name' => 'Deforestation',
                'description' => 'Deforestation is the large-scale, often permanent removal of forest cover for human land use, such as agriculture, mining, and infrastructure, resulting in a degraded "desert-brown" landscape.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categorys);
    }
}