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
                'text' => '<p>13-14 октября пройдет первый в Беларуси семейный фестиваль «GRAND FASHION WEEKEND»!</p>

<p>Это новый формат проведения выходных в атмосфере, где царит красота, сплоченность и семейный уют (в преддверии всемирного дня матери).</p>

<p>Это стильное городское масштабное мероприятие, посвященное развитию бизнеса, целевой аудиторией которого является 
современная семья.</p>

<p>Это уникальная возможность представить свой бренд/услугу на фестивале, где будет сконцентрирована ваша целевая 
аудитория.</p>

<h5>В программе:</h5>
                <ul>
                    <li>Beauty зона для женщин и мужчин,</li>
                    <li>Fashion зона,</li>
                    <li>Wellness зона,</li>
                    <li>Business зона,</li>
                    <li>Food&Drinks зона,</li>
                    <li>модные показы в стиле Milan Fashion Week,</li>
                    <li>мастер-классы,</li>
                    <li>подарки,</li>
                    <li>конкурсы от партнеров!</li>
                </ul>

<p><strong>Призываем всех посетить наш фестиваль, а лучшие бренды приглашаем к участию!</strong></p>',
                'image' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_afisha_small.jpg',
                'bg' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_bg.png',
                'begin_date' => '2018-10-13',
                'end_date' => '2018-10-14',
                'time' => '12:00-20:00',
                'price' => '5 руб.',
                'award' => '«Top of Belarus-2018»',
                'award_image' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top_small.jpg',
                'award_date' => '2018-10-13',
                'award_time' => 'Начало в 20:00',
                'passed' => false,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
