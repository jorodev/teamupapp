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
            <form action="/projects/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label name="title">Title</label>
                    <input name="title" type="text" class="form-control" id="project-title" placeholder="">
                </div>
                <div class="form-group">
                    <label name="stage">Stage</label>
                    <select name="stage" id="project-stage" class="form-control">
                        <option name="idea" value="idea" selected>Idea</option>
                        <option name="product or prototype" value="product or prototype">Product or prototype</option>
                        <option name="go to market" value="go to market">Go to market</option>
                        <option name="growth and expansion" value="growth and expansion">Growth and expansion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label name="description">Description</label>
                    <textarea name="description" class="form-control" id="project-description" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label name="termsAndConditions">Custom terms and conditions</label>
                    <textarea name="termsAndConditions" class="form-control" id="project-description" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label name="project_image">Upload project image:</label>
                    <input type="file" name="project_image" class="form-control-file" id="project_image">
                </div>
                <div class="form-group py-4">
                    <button type="submit" class="btn btn-primary btn-profile">Create project</button>
                </div>
            </form>
        </div>
        <div class="col col-md-2">
            
        </div>
    </div>
</section>
@endsection