<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
    */
    public function index(): \Illuminate\View\View
    {
        return view('frontend.layout.master');
    }
}