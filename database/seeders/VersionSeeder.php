<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('versions')->insert([
            [
                'project_id' => 1,
                'name' => 'バックログ',
                'type' => 0,
                'point' => 0,
                'start_date' => null,
                'end_date' => null,
                'enabled' => true
            ],
            [
                'project_id' => 1,
                'name' => 'Sprint03',
                'type' => 1,
                'point' => 18,
                'start_date' => new Carbon('2021-01-25'),
                'end_date' => new Carbon('2021-02-07'),
                'enabled' => true
            ],
            [
                'project_id' => 1,
                'name' => 'Sprint04',
                'type' => 1,
                'point' => 18,
                'start_date' => new Carbon('2021-02-08'),
                'end_date' => new Carbon('2021-02-21'),
                'enabled' => true
            ],
        ]);
    }
}
