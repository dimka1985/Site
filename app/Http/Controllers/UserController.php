<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Show the user profile dashboard.
     *
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function profile(User $user)
    {
        return view('profile', [
            'user' => $user,
        ]);
    }
}
