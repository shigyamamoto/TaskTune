<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'shigeki.yamamoto',
                'email' => 'supi.gm@gmail.com',
                'email_verified_at' => now(),
                'password' => \Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ], [
                'name' => 'chise.miyagi',
                'email' => 'chicham.spq@gmail.com',
                'email_verified_at' => now(),
                'password' => \Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}
