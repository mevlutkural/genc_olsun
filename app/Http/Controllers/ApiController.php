<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesPost;
use App\Models\InternshipPost;
use App\Models\JobPost;
use App\Models\ScholarshipPost;
use App\Models\StudentClub;
use App\Models\TalentProgram;
use App\Models\YoungUniversity;

class ApiController extends Controller
{
    public function getInternshipPosts()
    {
        return response()->json(InternshipPost::all());
    }

    public function getScholarshipPosts()
    {
        return response()->json(ScholarshipPost::all());
    }

    public function getJobPosts()
    {
        return response()->json(JobPost::all());
    }

    public function getTalentPrograms()
    {
        return response()->json(TalentProgram::all());
    }

    public function getActivitiesPosts()
    {
        return response()->json(ActivitiesPost::all());
    }

    public function getYoungUniversity()
    {
        return response()->json(YoungUniversity::all());
    }

    public function getStudentClubs()
    {
        return response()->json(StudentClub::all());
    }

}