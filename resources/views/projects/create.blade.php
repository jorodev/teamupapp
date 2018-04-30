@extends('layouts.app')

@section('content')
<section class="create-projects container">
    <div class="row justify-content-center py-4">
        <div class="col-12">
            <h2 class="text-center">Create project</h2>
        </div>
        <div class="col col-md-2">
            
        </div>
        <div class="col col-md-8">
            <form action="">
                <div class="form-group">
                    <label for="project-title">Title</label>
                    <input type="text" class="form-control" id="project-title" placeholder="">
                </div>
                <div class="form-group">
                    <label for="project-stage">Stage</label>
                    <select id="project-stage" class="form-control">
                        <option selected>Idea</option>
                        <option>Product or prototype</option>
                        <option>Go to market</option>
                        <option>Growth and expansion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="project-description">Description</label>
                    <textarea class="form-control" id="project-description" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label for="project-description">Custom terms and conditions</label>
                    <textarea class="form-control" id="project-description" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group py-4">
                    <button class="btn btn-primary btn-custom">Create project</button>
                </div>
            </form>
        </div>
        <div class="col col-md-2">
            
        </div>
    </div>
</section>
@endsection