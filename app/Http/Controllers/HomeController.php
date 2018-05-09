<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class HomeController extends Controller
{
    public function statistics() {

        $totalUsers = User::count();
        $totalProjects = Project::count();

        return view('index', compact('totalUsers', 'totalProjects'));
    }
}
