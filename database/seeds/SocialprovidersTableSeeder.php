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
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'facebook',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'github',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'google',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'linkedin',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider' => 'twitter',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
