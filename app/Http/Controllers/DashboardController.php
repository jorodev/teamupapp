<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mypage');
    }

    public function showMessages()
    {
        return view('dashboard.messages');
    }

    public function showProjects()
    {
        return view('dashboard.projects');
    }

    public function showLookups()
    {
        return view('dashboard.lookups');
    }

    public function editProfile()
    {
        return view('dashboard.editprofile');
    }

    public function showSettings()
    {
        return view('dashboard.settings');
    }

    public function showProfile()
    {
        return view('profile.index');
    }
}
