<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\jobSeeker;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function displayExperience() {
        $experience = Experience::all();
        return $experience;
    }

    public function displayJobSeeker() {
        $jobseeker = jobSeeker::all();
        return $jobseeker;
    }

    public function displayDashboard() {
        $experiences = $this->displayExperience();
        $jobseeker = $this->displayJobSeeker();

        $allData = [
            'experiences' => $experiences,
            'jobseeker' => $jobseeker,
        ];

        return view('dashboard', $allData);
    }

    public function addExperience(Request $request) {
        
        // $validateData = $request->validate([
        //     'companyName' => 'required',
        //     'startJoin' => 'required',
        //     'endJoin' => 'required',
        //     'role' => 'required',
        // ]);
        // @dd($validateData);
        $newExperience = new Experience();
        // $newExperience->jobSeeker_id = $jobSeeker_id;
        $newExperience->companyName = $request['companyName'];
        $newExperience->startJoin = $request['startJoin'];
        $newExperience->endJoin = $request['endJoin'];
        $newExperience->role = $request['role'];
        $newExperience->save();

        return redirect()->route('show.dashboard');
    }

    public function addForm() {
        return view('add-newExperience');
    }
}
