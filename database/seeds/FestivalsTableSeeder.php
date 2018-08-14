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
                'url' => 'grand_fashion_weekend_2018',
                'text' => 'Text',
                'image' => 'img/festivals/grand_fashion_weekend_2018/grand_fashion_weekend_2018_1.jpg',
                'date' => '13-14 октября 2018г.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
