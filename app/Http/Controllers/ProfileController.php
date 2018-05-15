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

        if($request->hasFile('profile_image')) {
            $currentUserImage = $user->image;

            $image = $request->file('profile_image');
            $filename = time() . '-' . $image->getClientOriginalName();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(150, 150)->save($location);

            $user->image = $filename;

            if ($currentUserImage != "no-image.png") {
                unlink(public_path('images/' . $currentUserImage));
                $user->save();

                return redirect('/dashboard/profile/edit')->with('success', "Profile image updated successfully!");
            } else if ($currentUserImage == "no-image.png") {
                $user->save();

                return redirect('/dashboard/profile/edit')->with('success', "Profile image updated successfully!");
            } else {
                return redirect('/dashboard/profile/edit')->with('error', "Profile image is incorrect! Try again!!");
            }
        }
    }

}
