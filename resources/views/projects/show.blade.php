@extends('layouts.app')

@section('content')
    <section class="show-projects container">
        <div class="row justify-content-center py-4">
            <h1>{{ $project->title }}</h1>

            <form class="" action="/projects/delete/{{ $project->id }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Destroy project</button>
            </form>
        </div>
    </section>
@endsection