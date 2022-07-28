<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($user_id)
    {
        $user = User::find($user_id);

        // Validate if user is existing
        if (empty($user)) {
            abort(404);
        }

        return view('user-card', compact('user'));
    }
}
