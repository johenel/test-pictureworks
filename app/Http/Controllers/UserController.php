<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($user_id)
    {
        $user = User::find($user_id);

        // Validate if user is existing
        if (empty($user)) {
            abort(404);
        }

        Auth::login($user);

        return view('user-card', compact('user'));
    }
}
