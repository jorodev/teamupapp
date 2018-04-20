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
            <img class="featurette-image img-fluid mx-auto" src="/images/laptop-feature.png" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Look-ups</span></h2>
            <p class="lead">Looking for an exciting project to join and help develop it with passionate people like yourself? Look-ups helps you find people to work and gain experience with.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="/images/laptop-feature.png" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Forum</h2>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/images/laptop-feature.png" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
    </section>
    {{-- End features --}}
    {{-- Start testimonies --}}
    <h1 class="display-4 text-center p-4">Testimonials</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                        <img src="/images/cat.jpg" alt="cat">
                        <h1>Testimonial 1</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
                                Nullam id dolor id nibh ultricies vehicula ut id elit..</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <img src="/images/cat.jpg" alt="cat">
                        <h1>Testimonial 2</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
                            Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <img src="/images/cat.jpg" alt="cat">
                        <h1>Testimonial 3</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
                            Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- End testimonies --}}
@endsection
