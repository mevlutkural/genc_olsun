<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
    */
    public function index(): \Illuminate\View\View
    {
        return view('admin.dashboard');
    }
}