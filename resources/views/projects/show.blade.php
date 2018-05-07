@extends('layouts.app')

@section('content')
    <section class="show-projects container">
        <div class="row justify-content-center py-4">
            <h1>{{ $project->title }}</h1>
        </div>
    </section>
@endsection