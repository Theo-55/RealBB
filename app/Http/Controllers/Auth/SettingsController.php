<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();

        $profilePhoto = public_path('Muscle_profile.jpg');

        return view('settings', [
            'user' => $user->name,
            'profile' => $profilePhoto
        ]);
    }

    public function email()
    {
        $user_email = auth()->user();
        return view('emailReset', [
            'user_email' => $user_email->email
        ]);
    }
}
