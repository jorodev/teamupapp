<div class="col-md-3 py-5 border-right text-center">
    <img class="rounded" src="/images/{{ Auth::user()->image }}" alt="avatar">
    <h4 class="py-4">{{ Auth::user()->name }}</h4>
    <ul class="list-unstyled flex-column" aria-orientation="vertical">
        <a class="nav-link dashboard-link {{ Route::currentRouteNamed('dashboard') ? 'dashboard-nav-active' : '' }}" href="/dashboard">My Page</a>
        <a class="nav-link dashboard-link {{ Route::currentRouteNamed('showProjects') ? 'dashboard-nav-active' : '' }}" href="/dashboard/projects">Projects</a>
        <a class="nav-link dashboard-link {{ Route::currentRouteNamed('showLookups') ? 'dashboard-nav-active' : '' }}" href="/dashboard/lookups">Look-ups</a>
        <a class="nav-link dashboard-link {{ Route::currentRouteNamed('editProfile') ? 'dashboard-nav-active' : '' }}" href="/dashboard/profile/edit">Edit profile</a>
        <a class="nav-link dashboard-link {{ Route::currentRouteNamed('showSettings') ? 'dashboard-nav-active' : '' }}" href="/dashboard/settings">Settings</a>
    </ul>
    <ul class="list-unstyled flex-column" aria-orientation="vertical">
        <a class="nav-link btn btn-primary btn-profile-lg" href="/profile/name">Public profile</a>
    </ul>
</div>