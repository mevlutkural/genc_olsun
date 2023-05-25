<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\View\View
    */
    public function loginForm(): \Illuminate\View\View
    {
        return view('admin.auth.login');
    }

    /**
     * @param \App\Http\Requests\Admin\AuthRequest $req
     *
     * @return \Illuminate\Http\Response
     */
    public function login(AuthRequest $req): \Illuminate\Http\Response
    {
        $credentials = $req->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return response('success');
        }

        return response('error', 401);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function resetPasswordForm(): \Illuminate\View\View
    {
        return view('admin.auth.reset-password');

        //return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $req): \Illuminate\Http\RedirectResponse
    {


        return redirect()->route('login');
    }
}