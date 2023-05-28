<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use stdClass;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
    */
    public function index(): \Illuminate\View\View
    {
        $data = new stdClass;
        $data->usersCount = User::count();

        return view('admin.dashboard', ['data' => $data]);
    }
}