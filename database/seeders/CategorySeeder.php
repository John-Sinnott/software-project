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
            [
                'name' => 'Desertification',
                'description' => 'Desertification is the degradation of land in arid, semi-arid, and dry sub-humid areas (drylands), resulting from human activities and climatic variations. It involves the loss of soil productivity and vegetation cover, transforming fertile land into barren, desert-like landscapes, but it does not mean existing deserts are expanding',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biodiversity-Loss',
                'description' => 'Biodiversity loss is the rapid, human-driven decline in the variety of life on Earth, including the reduction of species, genetic diversity, and entire ecosystems. Driven by habitat destruction, pollution, and climate change, this loss causes ecosystem instability, threatening food security, clean air, water, and human health.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categorys);
    }
}
