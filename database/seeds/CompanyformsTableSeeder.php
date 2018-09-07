<?php

use Illuminate\Database\Seeder;

class CompanyformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('admin')->table('companyforms')->insert([
            [
                'full_name' => 'общество с ограниченной ответственностью',
                'short_name' => 'ООО',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'общество с дополнительной ответственностью',
                'short_name' => 'ОДО',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'частное унитарное предприятие',
                'short_name' => 'ЧУП',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'закрытое акционерное общество',
                'short_name' => 'ЗАО',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'открытое акционерное общество',
                'short_name' => 'ОАО',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'индивидуальный предприниматель',
                'short_name' => 'ИП',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
