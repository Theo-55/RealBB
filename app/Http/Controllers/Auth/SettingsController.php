<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\ImageFile;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $photoString = $user->image;
        return view('settings', [
            'user' => $user->name,
            'profile' => $photoString
        ]);
    }

    public function email()
    {
        $user_email = auth()->user();
        return view('emailReset', [
            'user_email' => $user_email->email
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, array(
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        return response();

    }
}
