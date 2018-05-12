@extends('layouts.app')

@section('content')
@include('layouts.flashMessages')
<section class="dashboard container">
    <div class="row justify-content-center">
        
        @include('layouts.dashboard')

        <div class="col-md-9 py-5 pl-5 bg-white">
            <h3>Edit Profile</h3>
            <hr class="divider">
            <div class="edit-profile">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile information</a>
                        <a class="nav-item nav-link" id="nav-skills-tab" data-toggle="tab" href="#nav-skills" role="tab" aria-controls="nav-skills" aria-selected="false">Skills</a>
                        <a class="nav-item nav-link" id="nav-profileimg-tab" data-toggle="tab" href="#nav-profileimg" role="tab" aria-controls="nav-profileimg" aria-selected="false">Profile image</a>
                        <a class="nav-item nav-link" id="nav-socials-tab" data-toggle="tab" href="#nav-socials" role="tab" aria-controls="nav-socials" aria-selected="false">Socials</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    {{-- Profile Tab --}}
                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      {{-- @foreach($users as $user) --}}
                        <form action="/dashboard/profile/edit" method="POST">
                          @csrf
                          {{ method_field('PUT') }}
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputFirstName">First name</label>
                              <input name="first_name" type="text" class="form-control" id="inputFirstName" value="{{ Auth::user()->first_name }}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputFirstName">Last name</label>
                              <input name="last_name" type="text" class="form-control" id="inputLastName" value="{{ Auth::user()->last_name }}">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCountry">Country</label>
                              <select id="inputCountry" class="form-control">
                                <option selected>
                                  @if ($user->country)
                                    {{ $user->country }}
                                  @else
                                    {{ 'Choose...' }}
                                  @endif
                                </option>
                                <option>Bulgaria</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input name="city" type="text" class="form-control" id="inputCity" value="{{ Auth::user()->city }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputOccupation">Occupation</label>
                            <input name="occupation" type="text" class="form-control" id="inputOccupation" value="{{ Auth::user()->occupation }}">
                          </div>
                          <div class="form-group">
                            <label for="textArea">Description</label>
                            <textarea name="description" class="form-control" id="textArea" rows="10">{{ Auth::user()->description }}</textarea>
                          </div>
                          <div class="form-group">
                            <div class="form-check gender-check">
                              <div class="row">
                                <label for="gender">Gender</label>
                              </div>
                              <div class="form-group">
                                <input class="form-check-input position-static" type="radio" name="gender" value="male" {{ Auth::user()->gender == 'm' ? 'checked' : ''}}> Male
                              </div>
                              <div class="form-group">
                                <input class="form-check-input position-static" type="radio" name="gender" value="female" {{ Auth::user()->gender == 'f' ? 'checked' : ''}}> Female
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputDateOfBirth">Date of Birth</label>
                            <input name="date_of_birth" type="text" class="form-control" id="inputDateOfBirth" value="{{ Auth::user()->date_of_birth }}" placeholder="dd/mm/yyyy">
                          </div>
                          <button type="submit" class="btn btn-primary btn-profile mt-4">Save profile information</button>
                        </form>
                        {{-- @endforeach --}}
                    </div>
                    {{-- Skills Tab --}}
                    <div class="tab-pane fade" id="nav-skills" role="tabpanel" aria-labelledby="nav-skills-tab">
                        Skills
                    </div>
                    {{-- Profile Image Tab --}}
                    <div class="tab-pane fade" id="nav-profileimg" role="tabpanel" aria-labelledby="nav-profileimg-tab">
                        <form action="/dashboard/profile/edit#nav-profileimg" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label name="profile_image">Upload profile image:</label>
                              <input type="file" name="profile_image" class="form-control-file" id="profile_image">
                          </div>
                          <div class="form-group py-4">
                              <button type="submit" class="btn btn-primary btn-profile-md">Upload image</button>
                              <button type="submit" class="btn btn-danger">Delete image</button>
                          </div>
                      </form>
                    </div>
                    {{-- Socials Tab --}}
                    <div class="tab-pane fade" id="nav-socials" role="tabpanel" aria-labelledby="nav-socials-tab">
                        Socials
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection