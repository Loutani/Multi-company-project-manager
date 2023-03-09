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
    public function show(Profile $id)
    {
        return View('profile.index', ['profile' => $id]);
    }

    public function edit(Profile $id)
    {
        $userId = Auth()->user()->id;
        $profile = $id;

        return View('profile.edit', compact('profile', 'userId'));
    }

    public function update(Request $request)
    {
        $profile = Profile::find($request->id);

        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->birthdate = $request->birthdate;
        $profile->bio = $request->bio;
        $profile->job = $request->job;

        $profile->save();
        
        return redirect()->back();
    }
}
