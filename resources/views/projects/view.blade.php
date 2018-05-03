@extends('layouts.app')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-info">
            {{ Session::get('message') }}
        </div>
    @endif
    <section class="view-projects container">
        <h1 class="text-center pt-4">All Projects</h1>
        <div class="row justify-content-center py-4">
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
            <div class="card mx-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">by <span><a href="#">User</a></span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="projects/create" class="btn btn-primary btn-profile mx-auto m-4">Create project</a>
        </div>
    </section>
@endsection