@extends('layouts.app')

@section('content')
<section class="dashboard container">
    <div class="row justify-content-center">
        <div class="col-md-3 py-5 border-right text-center">
            <img class="rounded" src="http://via.placeholder.com/150x150" alt="Avatar">
            <h4 class="py-4">Name</h4>
            <ul class="list-unstyled flex-column" aria-orientation="vertical">
                <a class="nav-link nav-link-effect active" href="/dashboard">My Page</a>
                <a class="nav-link" href="/dashboard/messages">Messages</a>
                <a class="nav-link" href="/dashboard/projects">Projects</a>
                <a class="nav-link" href="/dashboard/lookups">Look-ups</a>
                <a class="nav-link" href="/dashboard/profile/edit">Edit profile</a>
                <a class="nav-link" href="/dashboard/settings">Settings</a>
            </ul>
        </div>
        <div class="col-md-9 py-5">
            <h3>My Page</h3>
            <hr class="divider">
            <div class="px-3">
                Activity
            </div>
        </div>
    </div>
</section>
@endsection
