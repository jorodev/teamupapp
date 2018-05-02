@extends('layouts.app')

@section('content')
<section class="dashboard container">
    <div class="row justify-content-center">

        @include('layouts.dashboard')

        <div class="col-md-9 pl-5 py-5">
            <div class="row">
                <div class="col-6">
                    <h3 class="">Look-ups</h3>
                </div>
                <div class="col-6">
                    <a href="projects/create" class="btn btn-primary btn-profile float-right">Create look-up</a>
                </div>
            </div>
            <hr class="divider hidden-xs">
            <div class="">
                <h3 class="mt-4">Owned look-ups</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Look-up 1</td>
                                <td class="text-right"><a href="#" class="btn btn-view">View</a></td>
                            </tr>
                            <tr>
                                <td scope="col">Look-up 2</td>
                                <td class="text-right"><a href="#" class="btn btn-view">View</a></td>
                            </tr>
                            <tr>
                                <td scope="col">Look-up 3</td>
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