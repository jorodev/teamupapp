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
        <h1 class="text-center pt-4">All Projects</h1>
        <div class="row justify-content-center py-4">
            @foreach($projects as $project)
                <div class="card mx-4 mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset("images/$project->image") }}" alt="project image">
                    <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">by <span><a href="#">{{ $project->user->name }}</a></span></p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="projects/create" class="btn btn-primary btn-profile mx-auto m-4">Create project</a>
        </div>
    </section>
@endsection