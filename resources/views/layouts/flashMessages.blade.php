@if (Session::has('success'))
    <div class="alert alert-info text-center">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger text-center">
        {{ Session::get('error') }}
    </div>
@endif