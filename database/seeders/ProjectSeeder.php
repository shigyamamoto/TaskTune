<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert([
            [
                'name' => 'EGG SE',
                'key' => 'eggse',
                'enabled' => true

            ],
            [
                'name' => 'Sample Project',
                'key' => 'smplpr',
                'enabled' => true
            ]
        ]);
    }
}
