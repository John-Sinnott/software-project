<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currentTimestamp = Carbon::now();


        $articles = [
            [
                'id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'description' => 'Large areas of the Amazon rainforest near Manaus have been cleared to make space for cattle ranching and soy farming. Environmental groups warn that continued deforestation threatens biodiversity and accelerates climate change.',
                'article_full' => 'Recent satellite data shows significant forest loss outside Manaus, Brazil, where agricultural expansion continues to push deeper into the Amazon. Conservationists say the destruction is putting pressure on indigenous communities and wildlife habitats. Efforts are underway to enforce environmental protections, but illegal logging and land clearing remain major challenges.',
                'latitude' => -3.1190,
                'longitude' => -60.0217,
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'user_id' => 1,
                'description' => 'Deforestation in Borneo has increased due to palm oil plantation expansion. Thousands of hectares of rainforest are being lost each year, threatening orangutan habitats.',
                'article_full' => 'In the Indonesian region of Borneo, forests are being rapidly cleared to support the global demand for palm oil. Wildlife experts warn that species such as the Bornean orangutan are facing severe habitat loss. Governments and NGOs are pushing for more sustainable agricultural practices to reduce environmental damage.',
                'latitude' => 0.9619,
                'longitude' => 114.5548,
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'user_id' => 2,
                'description' => 'Illegal logging in the Congo Basin is contributing to one of the fastest rates of forest loss in Africa. Local authorities struggle to regulate timber extraction in remote areas.',
                'article_full' => 'The Congo Basin rainforest, located near Kisangani in the Democratic Republic of the Congo, is under pressure from illegal logging operations. These activities threaten wildlife such as forest elephants and gorillas. International organisations are working with local governments to strengthen forest protection and monitoring.',
                'latitude' => 0.5153,
                'longitude' => 25.1913,
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'user_id' => 2,
                'description' => 'Deforestation in northern Thailand has been linked to agricultural expansion and infrastructure development. Forest clearing is increasing soil erosion and damaging local ecosystems.',
                'article_full' => 'In the mountainous regions around Chiang Mai, forest areas are increasingly being converted into farmland and roads. Environmental researchers report rising soil degradation and loss of biodiversity. Community-led conservation programs are being introduced to help restore forest coverage.',
                'latitude' => 18.7883,
                'longitude' => 98.9853,
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'user_id' => 3,
                'description' => 'Madagascar continues to face severe deforestation due to slash-and-burn agriculture. Unique wildlife species are at risk as forest habitats disappear.',
                'article_full' => 'Near Antananarivo, Madagascar’s forests are shrinking as local farmers clear land for subsistence agriculture. The island is home to many species found nowhere else on Earth, including several types of lemurs. Conservation groups are promoting sustainable farming alternatives to slow the rate of forest destruction.',
                'latitude' => -18.8792,
                'longitude' => 47.5079,
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
