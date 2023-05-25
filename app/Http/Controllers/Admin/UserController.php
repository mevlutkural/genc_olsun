<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\View\View
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $req): \Illuminate\Http\RedirectResponse
    {
        $user = new User();
        $user->fill($this->prepare($req, $user->getFillable()))->save();

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $req, User $user)
    {
        $user->fill(
            $this->prepare(
                $req,
                $user->getFillable()
            )
        )->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->user_id == 1 || User::count() < 2) {
            return response('Sistemde 1 kulanıcı olmak zorundadır.', 500);
        }
        $user->delete();

        return response('Kullanıcı başarıyla silindi.');
    }

    /**
     * Change user's password
    */
    public function passwordForm(User $user): \Illuminate\View\View
    {
        return view('admin.users.change-password', ['user' => $user]);
    }

    /**
     * Change user's password
     */
    public function updatePassword(UserRequest $req, User $user): \Illuminate\Http\RedirectResponse
    {
        $user->fill($req->all())->save();

        return redirect()->route('users.index');
    }
}