<?php

use Illuminate\Database\Seeder;

class FestivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('festivals')->insert([
            [
                'name' => 'GRAND FASHION WEEKEND',
                'place' => 'Ресторан-клуб «Усадьба»',
                'address' => 'г.Минск, ул. Филимонова 24',
                'url' => 'grand_fashion_weekend_2018',
                'heading' => 'Фестиваль GRAND FASHION WEEKEND 2018',
                'text' => 'Text',
                'image' => 'img/festivals/grand_fashion_weekend_2018/grand_fashion_weekend_2018_1.png',
                'begin_date' => '2018-10-13',
                'end_date' => '2018-10-14',
                'time' => '12-20ч.',
                'passed' => false,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
