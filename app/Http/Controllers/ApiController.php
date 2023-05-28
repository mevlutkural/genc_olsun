<?php

namespace App\Http\Controllers;

use App\Models\InternshipPost;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getInternshipPosts()
    {
        return response()->json(InternshipPost::all());
    }
}