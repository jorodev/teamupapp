@extends('layouts.app')

@section('content')
<section class="dashboard container">
    <div class="row justify-content-center">

        @include('layouts.dashboard')

        <div class="col-md-9 py-5">
            <h3>My Page</h3>
            <hr class="divider">
            <div>
                Activity
            </div>
        </div>
        
    </div>
</section>
@endsection
