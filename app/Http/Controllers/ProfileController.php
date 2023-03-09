<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * show the user profile
     */
    public function show()
    {
        $user = User::find(Auth::user()->id)->with('profile')->get()->first();

        return View('profile.index', compact('user'));
    }

    public function edit(Profile $id)
    {
        $userId = Auth()->user()->id;
        $profile = $id;

        return View('profile.edit', compact('profile', 'userId'));
    }
}
