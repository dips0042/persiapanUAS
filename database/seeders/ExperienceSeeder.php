<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        Experience::insert([
            // 'jobSeeker_id' => 1,
            'startJoin' => '2020-03-03',
            'endJoin' => '2020-12-12',
            'companyName' => 'Apa hayo',
            'role' => 'gatau hehe' 
        ]);

        Experience::insert([
            // 'jobSeeker_id' => 1,
            'startJoin' => '2021-12-12',
            'endJoin' => '2022-12-12',
            'companyName' => 'Apa yaaa',
            'role' => 'gabut :)' 
        ]);
    }
}
