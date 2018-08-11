<?php

use Illuminate\Database\Seeder;

class SocialprovidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socialproviders')->insert([
            [
                'provider' => 'bitbucket',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'github',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'google',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
