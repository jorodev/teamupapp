<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function displayProfileInfo()
    {
        $user = Auth::user();

        return view('dashboard.editprofile', compact('user'));
    }

    public function updateProfileInfo(Request $request)
    {
        $user = Auth::user();
    
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->city = $request->input('city');
        $user->occupation = $request->input('occupation');
        $user->description =$request->input('description');
        $user->date_of_birth = $request->input('date_of_birth');

        $user->save();
  
        // Flash::message('Your account has been updated!');
        return redirect('/dashboard/profile/edit')->with('success', "Profile information updated successfully!");
    }

    public function profileImage(Request $request) {
        $user = Auth::user();

        $image = $request->file('profile_image');
        $filename = time() . '-' . $image->getClientOriginalName();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(150, 150)->save($location);

        $user->image = $filename;
        $user->save();

        return redirect('/dashboard/profile/edit')->with('success', "Profile Image updated successfully!");
    }

}
