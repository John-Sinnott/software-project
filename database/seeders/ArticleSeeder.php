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
                'name' => 'Global Forest Deforestation and Its Impact',
                'date' => now(),
                'description' => 'An overview of global forest loss and its environmental impact based on FAO data.',
                'article_full' => 'The rate at which the forests are being destroyed is alarming and is leading to a significant impact on our planet. 
                                    The Global Forest Resources Assessment 2020 was published by the Food and Agriculture Organization (FAO), provides a detailed overview of global forest conditions over thirty years between 1990 – 2020. The report collected data from 236 countries and territories, analyzing factors such as forest areas, biodiversity, and environmental disturbances. 

                                    Since 1990, approximately 178 million hectares of forests have been lost worldwide. This area is roughly equivalent to the size of Libya, in total, around 420 million hectares of forest has been converted for uses such as agriculture and infrastructure. 

                                    Although deforestation remains a major concern, there has been some progress. The annual rate of forest loss since the 1990’s has decreased from 7.8 million hectares per year to just 4.7 million between the year 2010 and 2020. 

                                    Despite the improvement over the course of nearly 30 years, recent increases in deforestation rates between 2015 and 2020 have reached approximately 10 million hectares per year, this shows that the problem is far from solved and continued forest loss threatens our biodiversity and impacts global ecosystems.',
                'latitude' => 53,
                'longitude' => 8,
                'stat_number' => 178000000,
                'stat_label' => 'Hectares of forest lost since 1990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'user_id' => 1,
                'name' => 'Desertification in the Sahel Region',
                'date' => now(),
                'description' => 'An overview of desertification in the Sahel and its impact on communities and ecosystems.',
                'article_full' => 'Desertification In Sahel Regions - 

                                    The Sahel region of Africa is one of the most affected areas by desertification in the world. 

                                    The region that stretches across several countries south of the Sahara Desert including, parts of Mali, Niger, and Chad. Large areas of land in Sahel have become less suitable for farming and agriculture due to the increasingly dry conditions. 
                                
                                    Desertification in the Sahel is caused by both natural and human factors. Climate change has led to higher temperatures and reduced rainfall, making it difficult for vegetation to grow in its land. On the other hand, human activities such as overgrazing, deforestation, and poor land management have led to further damage to the soil, as a result fertile land is turning into deserts. 
                                 
                                    Peoples lives have been considerably impacted in this region due to many communities relying on farming and livestock for income. This leads to food shortages and poverty in the area because the land cannot produce the demand that is needed. People are forced to leave their homes in search of better living conditions, and water scarcity has become a problem as rivers and lakes have reduced in size over time. 
                                
                                    An example of this environmental change is Lake Chad in Sahel; it has seen a significant decrease in size over the last few decades. This just proves the scale of the degradation taking place in the region and its effects on the population. 

                                    A major initiative to combat these losses is the Great Green Wall project, it aims to restore millions of hectares of degraded land by planting trees and promoting sustainable land usage to the farmers. This not only helps the enviornmant but also boosts local economies by creating jobs and improving food security. 

                                    Desertification in the Sahel region demonstrates how these issues can have widespread social and economic impacts. Addressing problems such as these is essential for achieving SDG 15, which focuses on protecting and restoring life on land ',
                'latitude' => 19.0643,
                'longitude' => 3.5437,
                'stat_number' =>  100000000,
                'stat_label' => 'Hectares of land targeted for restoration by the Great Green Wall',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'user_id' => 3,
                'name' => 'Rapid biodiversity loss in Madagascar',
                'date' => now(),
                'description' => 'Madagascar is experiencing rapid biodiversity loss as forests are cleared for agriculture. Many of the island’s unique species are now threatened by habitat destruction.',
                'article_full' => 'Biodiversity Loss in Madagascar - 

                                    Madagascar is one of the most unique ecosystems in the world, it is home to a vast range of plants and animals that of which dont call home in any other place on Earth. Because of this, the island has developed an extraordinary level of biodiversity, making it incredibly important for conservation globally. 
                                    
                                    According to the World Wildlife Fund (WWF), Around 70% of Madagascars species are found nowhere else in the world, Including several different species of lemurs, reptiles, and plant life. Which highlights the importance of protecting it as an environmental hotspot. 

                                    However, this biodiversity is under a serious threat. Manmade activities such as deforestation, agriculture and resource exploitation have cause significant environmental damage, it is estimated that around 90% of Madagascars original forest cover has already been lost due to land being cleared for farming. 

                                    The loss of forests has had a direct impact on the wildlife in Madagascar. Many species rely on these important ecosystems to survive, and as they are destroyed, animals such as lemurs face the risk of extinction. According to environmental data, many species have recently been classified as endangered or threatened. 

                                    This is not only a local issue, but a global one. Biodiversity plays a key role in maintaining ecosystems, supporting food systems, and regulating the climate. This loss in Madagascar highlights the wider problem stemming from biodiversity loss across the world and the urgent need for efforts to be made to stop it. 

                                    Protections are being put in place in Madagascars unique environment, including conservation programmes and protected areas. However, Continued action is required to make sure that these areas can be preserved for the future generations.',
                'latitude' => -18.8792,
                'longitude' => 47.5079,
                'stat_number' => 70,
                'stat_label' => '% of wildlife in Madagascar found nowhere else',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'user_id' => 2,
                'name' => 'Illegal loggin in Georgia',
                'date' => now(),
                'description' => 'Illegal logging in Georgia and how its destroying the forests',
                'article_full' =>'The problem of illegal loggin and deforestation in Georgia has been a cause of worry for the last 30 years due to these companies relentless disregard for local ecosystems. Thankfully the Georgian government implemented a stricter regulation in 2025 which can result in up to 3-5 years in prison for failure to comply.',
                'article_full' => 'Georgia Tightens Sanctions for Illegal Logging
                The Parliament of Georgia has adopted legislative amendments to strengthen sanctions for illegal logging, following a draft law prepared by the Ministry of Environmental Protection and Agriculture. The amendments introduce stricter penalties under the Criminal Code and the Code of Administrative Offences, reflecting the government’s commitment to protecting the country’s forest resources.
                The new regulations impose tougher liability for offences such as the illegal processing of industrial timber, with particular attention given to violations involving sawmills and the unauthorised handling of unmarked roundwood (logs). However, the law maintains allowances for rural residents to extract firewood following existing legal provisions. 
                The Deputy Minister of Environmental Protection and Agriculture, Mrs. Nino Tandilashvili, submitted the draft law to Parliament for its third reading. 
                Key provisions include:
                Sanctions are being tightened for offences such as violations of sawmill registration requirements, placement of unmarked roundwood (logs) on sawmill premises, illegal felling of woody plants, unlawful timber production, and the illegal transportation of roundwood.
                Violation of sawmill registration requirements will now be punishable by 1 to 3 years of imprisonment, and 3 to 5 years for repeat offences.
                A newly introduced Article 287² in the Criminal Code defines criminal liability for the placement of unmarked roundwood at sawmill facilities. If the action is repeated by someone previously subjected to administrative sanctions, or if the quantity of unmarked timber causes significant environmental damage, the penalty includes a fine and/or imprisonment of 1 to 3 years. The placement of a large quantity of unmarked timber resources may result in 3 to 5 years of imprisonment and/or a fine. Legal entities found guilty under this article face liquidation or a five-year ban on conducting business.
                Illegal felling of woody plants and unlawful timber production will now be punishable by 1 to 3 years of imprisonment, increasing to up to 4 years for repeat violations. If committed by a legal entity, the penalty includes liquidation or business disqualification for up to 5 years.
                The amendments also introduce criminal liability for the illegal logging of large quantities of trees in state forests or protected areas, punishable by a fine and/or 5 to 7 years of imprisonment.',
                'latitude' => 42.315,
                'longitude' => 43.3569,
                'stat_number' => 5,
                'stat_label' => 'Years imprisonment for repeated illegal logging offences',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
