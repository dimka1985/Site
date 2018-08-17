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
                'text' => '<h1>13-14 октября пройдет первый в Беларуси семейный фестиваль «GRAND FASHION WEEKEND»!</h1>

<p>Это новый формат проведения выходных в атмосфере, где царит красота, сплоченность и семейный уют (в преддверии всемирного дня матери)!</p>

<p>Это стильное городское масштабное мероприятие, посвященное развитию бизнеса, целевой аудиторией которого является 
современная семья.</p>

<p>Это уникальная возможность представить свой бренд/услугу на фестивале, где будет сконцентрирована ваша целевая 
аудитория.</p>

<p>В программе : Beauty зона для женщин и мужчин, Fashion зона, Wellness зона, Business зона, Food&Drinks зона, модные показы в стиле Milan Fashion Week, мастер-классы, подарки, конкурсы от партнеров!</p>

<p>Приглашаем лучшие бренды к участию!</p>',
                'image' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_afisha_small.png',
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
