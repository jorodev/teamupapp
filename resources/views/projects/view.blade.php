@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-info text-center">
            {{ Session::get('success') }}
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
                        <img class="card-img-top" src="{{ asset("images/$project->image") }}" alt="project image">
                        <div class="card-body">
                            <h5 class="card-title mb-1"><a class="text-dark font-weight-bold" href="/projects/{{ $project->id }}">{{ $project->title }}</a></h5>
                            <small>by <a href="#">{{ $project->user->name }}</a></small>
                            <div class="card-text mt-2">
                                <img src="http://via.placeholder.com/35x35" alt="" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div>There's no projects created yet!</div>
            @endif
        </div>
    </section>
@endsection