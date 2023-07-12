<?php

namespace Database\Seeders;

use App\Models\jobSeeker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        jobSeeker::insert([
            'name' => 'Hayolo siapa',
            'description' => 'nggatau mau diisi deskripsi apa nih hehe',
            'gpa' => 3.5,
            'education' => 'jurusan A, Universitas B',
            'status' => 'Looking for Job'
        ]);
    }
}
