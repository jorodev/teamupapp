@extends('layouts.app')

@section('content')
    @include('layouts.flashMessages')

    <section class="view-projects container">
        <div class="row mt-4">
            <div class="col-6">
                <h2 class="">All Projects</h3>
            </div>
            @if (Auth::check())
                <div class="col-6">
                    <a href="{{ URL('projects/create') }}" class="btn btn-primary btn-profile-md float-right">Create project</a>
                </div>
            @endif
        </div>
        <hr class="divider hidden-xs">
        <div class="row justify-content-center py-4">
            @if(count($projects) != 0)
                @foreach($projects as $project)
                    <div class="card mx-4 mb-4" style="width: 20.5rem;">
                        <a href="/projects/view/{{ $project->id }}">
                            <div class="overlay">
                                <img class="card-img-top overlay-image" src="{{ asset("images/$project->image") }}" alt="project image">
                                <div class="overlay-middle">
                                    <div class="overlay-text">View project</div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title mb-1"><a class="text-dark font-weight-bold" href="/projects/view/{{ $project->id }}">{{ $project->title }}</a></h5>
                            <small class="text-muted">by <a class="text-dark" href="#">{{ $project->user->name }}</a></small>
                            <div class="card-text mt-3">
                                <img src="http://via.placeholder.com/35x35" alt="" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div>There's no projects created yet!</div>
            @endif
        </div>
        {{-- <div class="row justify-content-center"> --}}
            <div class="col-4 text-center">
                {{ $projects->links() }}
            </div>
        {{-- </div> --}}
    </section>
@endsection