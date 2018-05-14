<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayProfileInfo()
    {
        $user = Auth::user();

        return view('dashboard.editprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

}
