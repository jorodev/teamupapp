@extends('layouts.app')

@section('content')
    <section class="show-projects container">
        @if (Session::has('success'))
        <div class="alert alert-info text-center">
            {{ Session::get('success') }}
        </div>
        @endif
    
        @if (Session::has('error'))
            <div class="alert alert-danger text-center">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="row justify-content-center py-4">
            <h1>{{ $project->title }}</h1>

            @if(Auth::id() == $project->user_id)
                <form class="" action="/projects/delete/{{ $project->id }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Destroy project</button>
                </form>
            @endif
        </div>
    </section>
@endsection