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
                    <div class="col display-4">1</div>
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
    </section>
    {{-- End features --}}
    {{-- Start testimonies --}}
    <section id="myCarousel" class="carousel slide" data-ride="carousel">
        <h1 class="display-4 text-center text-white pt-5 mt-5">Testimonials</h1>
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
                        <h1>Person name 1</h1>
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
                        <h1>Person name 2</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
                            Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <img src="/images/cat.jpg" alt="cat">
                        <h1>Person name 3</h1>
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
    </section>
    {{-- End testimonies --}}
    {{-- Start sartners --}}
    <section class="team">
        <div class="container mb-5 text-center">
            <h1 class="display-4 text-center py-4 mt-3">Team</h1>
            <div class="row">
                <div class="col-xs-6 col-md-3">
            
                </div>
                <div class="col-xs-6 col-md-3">
                    <img class="mx-auto" src="/images/me.jpg" alt="">
                    <h5 class="mt-3">Georgi Georgiev</h5>
                    <h6>Founder & Web developer</h6>
                </div>
                <div class="col-xs-6 col-md-3">
                    <img class="mx-auto" src="http://via.placeholder.com/150x150" alt="">
                    <h5 class="mt-3">Your place</h5>
                </div>
                <div class="col-xs-6 col-md-3">

                </div>
            </div>
            <hr class="divider">
            <div class="row">
                <div class="col-12">
                    <h4 class="mt-3">Be part of TeamUp</h4>
                </div>
                <div class="col-12">
                    <p class="text-muted">We are looking for partners. If you think the project sounds interesting, feel free to <a href="#">contact us</a>.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End partners --}}
@endsection
