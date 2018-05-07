@extends('layouts.app')

@section('content')
<section class="dashboard container">
    <div class="row justify-content-center">

        @include('layouts.dashboard')

        <div class="col-md-9 pl-5 py-5">
            <div class="row">
                <div class="col-6">
                    <h3 class="">Projects</h3>
                </div>
                <div class="col-6">
                    <a href="{{ URL('projects/create') }}" class="btn btn-primary btn-profile float-right">Create project</a>
                </div>
            </div>
            <hr class="divider hidden-xs">
            <div class="">
                <h3 class="mt-4">Owned projects</h3>
                @if(count($projects) != 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="hidden-xs">Members</th>
                                    <th scope="col" class="text-right">Actions</th>
                                </tr>
                            </thead>
                            @foreach($projects as $project)
                            <tbody>
                                <tr>
                                <td scope="col">{{ $project->title }}</td>
                                    <td>imgs</td>
                                    <td class="text-right"><a href="#" class="btn btn-view">View</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                @else
                    <div>You don't own any projects yet.</div>
                @endif
                <h3 class="mt-4">Projects you're member of</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col" class="hidden-xs">Members</th>
                                <th scope="col" class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Project 1</td>
                                <td>imgs</td>
                                <td class="text-right"><a href="#" class="btn btn-view">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection