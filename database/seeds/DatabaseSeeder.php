<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SocialprovidersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(FestivalsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CompanyformsTableSeeder::class);
    }
}
