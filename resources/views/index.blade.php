@extends('layouts.app')

@section('content')
    {{-- Start hero-header --}}
    <header class="hero-header">
        <div class="container">
            <div class="row heading text-center text-white">
                <div class="col">
                    <h1 class="display-3">TeamUp</h1>
                    <h2 class="lead">Find team members for new exciting software projects </h2>
                    <a class="btn btn-primary btn-custom" href="{{ route('register') }}">Join us</a>
                </div>
            </div>
        </div>
    </header>
    {{-- END hero-header --}}
    <section class="statistics">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Users</div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Projects</div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Look-ups</div>
                </div>
            </div>
        </div>
    </section>
    {{-- Start features --}}
    <section class="container marketing">
        <h1 class="display-4 text-center py-5">Features</h1>
        {{-- <hr class="featurette-divider"> --}}
        <div class="row featurette">
          <div class="col-md-7 ">
            <h2 class="featurette-heading">Projects</h2>
            <p class="lead">Do you have a brilliant idea but not exactly sure what sort of skills you need? Create a project, show off a teaser of your idea and allow others to apply to the project.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Look-ups</span></h2>
            <p class="lead">Looking for an exciting project to join and help develop it with passionate people like yourself? Look-ups helps you find people to work with.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
    </section>
    {{-- End features --}}
@endsection
