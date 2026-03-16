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
                'description' => 'Deforestation in the Brazilian Amazon has surged in recent years due to cattle ranching and agricultural expansion. Satellite monitoring shows thousands of square kilometres of rainforest being cleared annually.',
                'article_full' => 'Satellite data collected by Brazil’s National Institute for Space Research (INPE) has shown continued forest loss in the Amazon rainforest, particularly in regions surrounding Manaus and other agricultural frontiers. Scientists warn that deforestation reduces the Amazon’s ability to absorb carbon dioxide, worsening climate change and threatening thousands of plant and animal species that depend on the forest ecosystem.',
                'latitude' => -3.1190,
                'longitude' => -60.0217,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'user_id' => 1,
                'description' => 'Palm oil production has been one of the leading causes of deforestation in Borneo. Large areas of tropical rainforest have been cleared to establish industrial plantations.',
                'article_full' => 'Environmental groups report that palm oil expansion in Indonesia and Malaysia has led to extensive forest clearing across the island of Borneo. The destruction of these forests threatens endangered wildlife such as orangutans, pygmy elephants, and clouded leopards, while also releasing significant amounts of carbon stored in peatlands.',
                'latitude' => 0.9619,
                'longitude' => 114.5548,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'user_id' => 2,
                'description' => 'Illegal logging remains a major threat to the Congo Basin rainforest. Weak enforcement and high demand for timber are accelerating forest degradation across Central Africa.',
                'article_full' => 'The Congo Basin is the world’s second-largest rainforest and plays a vital role in regulating global climate systems. However, illegal logging operations and unsustainable timber extraction are placing immense pressure on the ecosystem, threatening endangered species including forest elephants and western lowland gorillas.',
                'latitude' => 0.5153,
                'longitude' => 25.1913,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'category_id' => 2,
                'user_id' => 2,
                'description' => 'Desertification across the Sahel region of Africa is threatening agriculture and food security. Expanding drylands are forcing communities to adapt to harsher environmental conditions.',
                'article_full' => 'Countries across the Sahel, including Niger and Mali, are facing growing desertification caused by climate change, overgrazing, and unsustainable land use. The loss of fertile soil is reducing crop yields and increasing the vulnerability of rural communities, prompting international efforts such as the Great Green Wall initiative to restore degraded land.',
                'latitude' => 13.5116,
                'longitude' => 2.1254,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'category_id' => 3,
                'user_id' => 3,
                'description' => 'Madagascar is experiencing rapid biodiversity loss as forests are cleared for agriculture. Many of the island’s unique species are now threatened by habitat destruction.',
                'article_full' => 'Madagascar is one of the most biologically diverse places on Earth, with around 90 percent of its wildlife found nowhere else. However, slash-and-burn farming practices and logging have significantly reduced forest coverage, putting species such as lemurs, chameleons, and rare plants at risk of extinction.',
                'latitude' => -18.8792,
                'longitude' => 47.5079,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'category_id' => 1,
                'user_id' => 2,
                'description' => 'The problem of illegal loggin and deforestation in Georgia has been a cause of worry for the last 30 years due to these companies relentless disregard for local ecosystems. Thankfully the Georgian government implemented a stricter regulation in 2025 which can result in up to 3-5 years in prison for failure to comply.',
                'article_full' => 'Georgia Tightens Sanctions for Illegal Logging
                The Parliament of Georgia has adopted legislative amendments to strengthen sanctions for illegal logging, following a draft law prepared by the Ministry of Environmental Protection and Agriculture. The amendments introduce stricter penalties under the Criminal Code and the Code of Administrative Offences, reflecting the government’s commitment to protecting the country’s forest resources.
                The new regulations impose tougher liability for offences such as the illegal processing of industrial timber, with particular attention given to violations involving sawmills and the unauthorised handling of unmarked roundwood (logs). However, the law maintains allowances for rural residents to extract firewood following existing legal provisions. 
                The Deputy Minister of Environmental Protection and Agriculture, Mrs. Nino Tandilashvili, submitted the draft law to Parliament for its third reading. 
                Key provisions include:
                Sanctions are being tightened for offences such as violations of sawmill registration requirements, placement of unmarked roundwood (logs) on sawmill premises, illegal felling of woody plants, unlawful timber production, and the illegal transportation of roundwood.
                Violation of sawmill registration requirements will now be punishable by 1 to 3 years of imprisonment, and 3 to 5 years for repeat offences.
                A newly introduced Article 287² in the Criminal Code defines criminal liability for the placement of unmarked roundwood at sawmill facilities. If the action is repeated by someone previously subjected to administrative sanctions, or if the quantity of unmarked timber causes significant environmental damage, the penalty includes a fine and/or imprisonment of 1 to 3 years. The placement of a large quantity of unmarked timber resources may result in 3 to 5 years of imprisonment and/or a fine. Legal entities found guilty under this article face liquidation or a five-year ban on conducting business.
                Illegal felling of woody plants and unlawful timber production will now be punishable by 1 to 3 years of imprisonment, increasing to up to 4 years for repeat violations. If committed by a legal entity, the penalty includes liquidation or business disqualification for up to 5 years.
                The amendments also introduce criminal liability for the illegal logging of large quantities of trees in state forests or protected areas, punishable by a fine and/or 5 to 7 years of imprisonment. ',
                'latitude' => 42.315,
                'longitude' => 43.3569,
                'stat_number' => 10000,
                'stat_label' => 'Trees cut down in amazon in last 48 hrs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
