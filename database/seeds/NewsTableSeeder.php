<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tidings')->insert([
            [
                'name'       => '25 августа пройдёт ежегодный семейный фестиваль «ХмельновFest»',
                'url'        => 'festival_hmelnovfest_2018',
                'heading'    => 'Захватывающие развлечения весь день, музыка, вкусная еда ожидают посетителей ежегодного фестиваля «ХмельновFEST».',
                'text'       => '
<p>25 августа в субботу столичный сквер «Старостинская слобода» перед гостиницей «Беларусь» станет местом отдыха для всей семьи.
В финале праздника выступит легендарная группа «Машина времени».</p>

<p>ХмельновFEST – это праздник для всей семьи, а значит, каждый найдет себе развлечение по душе. Для этого 
пространство фестиваля будет разделено на несколько зон:</p> 

<h5>Мужские локации</h5>
<ul>
<li>большая спортивная зона с мастер-классами</li> 

<li>брутальный забег с любимыми девушками на спине</li> 

<li>аттракцион «Бык родео»</li>

<li>рыбалка голыми руками</li>

<li>открытый кубок по дартсу</li>

<li>пит-стоп – соревнование на скорость замены колеса</li> 

<li>жонглирование футбольными мячами</li>

<li>бесплатные стрижки от профессиональных барбершоперов</li>
</ul>
<h5>Женские локации</h5>
<ul>
<li>мастер-классы по росписи пряников, кружек и изготовлению фирменных брошек</li>

<li>большая спортивная зона с тренировками для девушек и женщин</li> 

<li>танцевальные мастер-классы</li>

<li>Familyзабег – конкурсная программа для всей семьи</li>

<li>консультация популярного бьюти-блогера о рецептах красоты на основе пива</li> 

<li>чайная церемония – мастер класс по приготовлению чая, советы по сбору, хранению, ферментированию</li>

<li>бесплатный макияж от профессиональных визажистов для всех желающих</li>
</ul>
<h5>Детские локации</h5>
<ul>
<li>аквагрим</li>

<li>мегагорки</li>

<li>батуты</li>

<li>интерактивные сказки</li>

<li>игрушечный городок</li>

<li>аниматоры</li>

<li>детская дискотека</li> 
</ul>
<h5>Фудкорт</h5>
<ul>
<li>вкуснейшие закуски к пенному: уха, мясо на вертеле, узбекский плов, вареные раки и другие аппетитные блюда</li>

<li>кулинарное «Хмельнов-шоу» со звездой – известные медиаперсоны приготовят свои любимые блюда к пиву</li>

<li>мастер-класс по приготовлению шашлыка от грузинского повара</li> 

<li>шоу барменов</li> 
</ul>
<h5>Живая музыка</h5>
<ul>
<li>фестиваль «Хмельнов» посетит легендарная группа «Машина времени» и споет свои нестареющие хиты</li>
<li>также на сцене выступят зажигательные «Крамбамбуля», «Крама», OpenSpace и ТОП-5 лучших кавер-бэндов музыкального конкурса CoverKing</li>
</ul>
<p>Но это еще не все, что приготовил «Хмельнов» для своих друзей. После активных игр и соревнований гости фестиваля 
смогут расслабиться в лаунж-зоне посреди живописной березовой рощи, посетить баню и попробовать лечебный массаж вениками. Также будут работать выставки, где можно увидеть уникальные экспонаты из различных сфер: охота, автоспорт, природа Беларуси и многое другое.</p>

<p>Посетят фестиваль не только минчане, но и жители всех регионов Беларуси и гости нашей страны. В областных городах будут организованы туры на фестиваль.</p>

<p>Начало фестиваля в 12.00.</p>
<p>Использованы информация и изображения с сайтов: <a 
        href="http://hmelnovfest.by/">hmelnovfest.by</a>, <a href="https://afisha.tut.by/other/khmelnov-fest/">afisha.tut.by</a></p>',
                'image'      => 'img/news/festival_hmelnovfest_2018/festival_hmelnovfest_2018_1.jpg',
                'is_active'  => true,
                'created_at' => '2018-08-01 13:00:00',
                'updated_at' => '2018-08-01 13:00:00',
            ],
            [
                'name'       => '13-14 октября пройдет первый в Беларуси семейный фестиваль «GRAND FASHION WEEKEND»',
                'url'        => 'grand_fashion_weekend_2018',
                'heading'    => 'Фестиваль <a href="https://okgroup.by/festivals/grand_fashion_weekend_2018">GRAND FASHION WEEKEND 2018</a>',
                'text'       => '
<p>Это новый формат проведения выходных в атмосфере, где царит красота, сплоченность и семейный уют (в преддверии всемирного дня матери)!</p>

<p>Это стильное городское масштабное мероприятие, посвященное развитию бизнеса, целевой аудиторией которого является современная семья.</p>

<p>Это уникальная возможность представить свой бренд/услугу на фестивале, где будет сконцентрирована ваша целевая 
аудитория.</p>

<h5>В программе:</h5> 
<ul>
<li>Beauty зона для женщин и мужчин (мастер-классы по подбору косметики и уходовых средства, уникальные косметические бренды и специальные скидки только для гостей фестиваля),</li>
<li>Fashion зона (известные бренды и белорусские дизайнеры, которые представят осенние коллекции в рамках модного шоурума, стильные модные показы и Fashion инсталляции, бесплатные консультации стилистов-имиджмейкеров),</li>
<li>Wellness зона (спа-шоурум с презентацией программ: “Gentleman only” и “Lady secret“, бесплатные консультации диетологов),</li>
<li>Sport зона (бесплатные тренировки, индивидуальные консультации от известных тренеров, составления программ тренировок, мастер-классы от белорусских спортсменов),</li>
<li>Business зона (уникальные мастер-классы, выступления известных спикеров),</li>
<li>Food&Drinks зона (авторские коктейли, лучшие кондитеры с мировым именем, самые вкусные сеты от известных заведений нашего города),</li> 
<li>модные показы в стиле Milan Fashion Week,</li>
<li>мастер-классы,</li>
<li>подарки,</li>
<li>конкурсы от партнеров!</li>
</ul>
<h5>Внимание! Конкурс для посетителей фестиваля! <a href="https://okgroup.by/news/grand_fashion_weekend_2018_konkurs">Читать условия</a>!</h5>
<p>Приглашаем лучшие бренды к участию!</p>
<h4><a href="' . config('app.url') . '/festivals/grand_fashion_weekend_2018">Узнать больше о GRAND FASHION WEEKEND 2018!</a></h4>
<h5>Официальный инстаграм:
<strong><a href="https://www.instagram.com/grand_fashion_weekend_/"><i class="fab fa-instagram mr-1"></i> Инстаграм GRAND FASHION WEEKEND</a></strong></h5>',
                'image'      => 'img/news/grand_fashion_weekend_2018/grand_fashion_weekend_2018_1.jpg',
                'is_active'  => true,
                'created_at' => '2018-08-03 12:00:00',
                'updated_at' => '2018-08-03 12:00:00',
            ],
            [
                'name'       => 'Конкурс для гостей фестиваля «GRAND FASHION WEEKEND»',
                'url'        => 'grand_fashion_weekend_2018_konkurs',
                'heading'    => 'Объявляем о конкурсе для посетителей фестиваля <a href="https://okgroup.by/festivals/grand_fashion_weekend_2018">GRAND FASHION WEEKEND 2018</a>',
                'text'       => '
<p>13-14 октября пройдет первый в Беларуси семейный фестиваль "GRAND FASHION WEEKEND"! Мы подготовили для Вас много сюрпризов и подарков, а прямо сейчас расскажем об условиях нашего конкурса!</p>
<ul>
<li>🍁Сделайте красивое осеннее фото/видео;</li>
<li>🍁Добавьте его в Instagram с хэштегом <span class="text-primary">#grandfashionweekend</span>;</li>
<li>🍁Продолжите фразу: «Эта осень будет особенной, потому что...»</li>
<li>🍁Приходите 13/14 октября на наш фестиваль;</li>
<li>🍁покажите публикацию и получите возможность достать из лототрона счастливую карточку, на которой будет написано пожелание или подарок, который Вы выиграли (подарков будет очень много)!😉</li>
</ul>
<p>Сохраняйте, чтобы не забыть: 13/14 октября встречаемся на самом семейном фестивале этой осени в Усадьбе Ваньковичей (Филимонова, 24)!</p>
<h5>Вход свободный☝</h5>
<h5>Приходите всей семьей!</h5>
<h4><a href="https://okgroup.by/festivals/grand_fashion_weekend_2018">Узнать больше о GRAND FASHION WEEKEND 2018!</a></h4>
<h5>Официальный инстаграм:
<strong><a href="https://www.instagram.com/grand_fashion_weekend_/"><i class="fab fa-instagram mr-1"></i> Инстаграм GRAND FASHION WEEKEND</a></strong></h5>',
                'image'      => 'img/news/grand_fashion_weekend_2018_konkurs/grand_fashion_weekend_2018_konkurs_1.jpg',
                'is_active'  => true,
                'created_at' => '2018-08-31 18:00:00',
                'updated_at' => '2018-08-31 18:00:00',
            ],
        ]);
    }
}
