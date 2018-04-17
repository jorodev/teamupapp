@extends('layouts.app')

@section('content')
    <header class="hero-header">
        <div class="container">
            <div class="row heading text-center text-white">
                <div class="col">
                    <h1 class="display-3">TeamUp</h1>
                    <h2 class="lead">Some bullshit here aswell</h2>
                    <button class="btn btn-primary btn-custom">Join us</button>
                </div>
            </div>
        </div>
    </header>
    <section class="statistics">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Total users</div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Projects in progress</div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="col display-4">0</div>
                    <div class="col">Finished projects</div>
                </div>
            </div>
        </div>
    </section>
    <section class="container marketing">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 ">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="http://via.placeholder.com/500x500" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
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
        <!-- /END THE FEATURETTES -->
    </section><!-- /.container -->
@endsection
