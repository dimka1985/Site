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
                'instagram' => 'https://www.instagram.com/grand_fashion_weekend_/',
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
                    <li>Beauty зона для женщин и мужчин (мастер-классы по подбору косметики и уходовых средства, уникальные косметические бренды и специальные скидки только для гостей фестиваля),</li>
<li>Fashion зона (известные бренды и белорусские дизайнеры, которые представят осенние коллекции в рамках модного шоурума, стильные модные показы и Fashion инсталляции, бесплатные консультации стилистов-имиджмейкеров),</li>
<li>Wellness зона (спа-шоурум с презентацией программ: “Gentleman only” и “Lady secret“, бесплатные консультации диетологов),</li>
<li>Sport зона (бесплатные тренировки, индивидуальные консультации от известных тренеров, составления программ тренировок, мастер-классы от белорусских спортсменов),</li>
<li>Business зона (<a href="https://okgroup.by/festivals/grand_fashion_weekend_2018/speakers">уникальные мастер-классы, выступления известных спикеров</a>),</li>
<li>Food&Drinks зона (авторские коктейли, лучшие кондитеры с мировым именем, самые вкусные сеты от известных заведений нашего города),</li> 
<li>модные показы в стиле Milan Fashion Week,</li>
<li><a href="https://okgroup.by/festivals/grand_fashion_weekend_2018/speakers">мастер-классы</a>,</li>
<li>подарки,</li>
<li>конкурсы от партнеров!</li>
                </ul>
<h5>Внимание! Конкурс для посетителей фестиваля! <a href="https://okgroup.by/news/grand_fashion_weekend_2018_konkurs">Читать условия</a>!</h5>
<p><strong>Призываем всех посетить наш фестиваль, а лучшие бренды приглашаем к участию!</strong></p>',
                'image' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_afisha_small.jpg',
                'bg' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_bg.png',
                'begin_date' => '2018-10-13',
                'end_date' => '2018-10-14',
                'time' => '12:00-20:00',
                'price' => 'бесплатно',
                'award' => '«Top of Belarus-2018»',
                'award_nominations' => '46',
                'award_image' => 'img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top_small.jpg',
                'award_date' => '2018-10-13',
                'award_time' => 'Начало в 20:00',
                'passed' => false,
                'is_active' => true,
                'created_at' => '2018-08-01 10:00:00',
                'updated_at' => now(),
            ],
        ]);
    }
}
