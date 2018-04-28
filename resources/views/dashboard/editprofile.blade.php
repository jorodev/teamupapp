@extends('layouts.app')

@section('content')
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
                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form> 
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputFirstName">First name</label>
                              <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputFirstName">Last name</label>
                              <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCountry">Country</label>
                              <select id="inputCountry" class="form-control">
                                <option selected>Choose...</option>
                                <option>Bulgaria</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input type="text" class="form-control" id="inputCity" placeholder="City">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputOccupation">Occupation</label>
                            <input type="text" class="form-control" id="inputOccupation">
                          </div>
                          <div class="form-group">
                            <label for="textArea">Description</label>
                            <textarea class="form-control" id="textArea" rows="10"></textarea>
                          </div>
                          <div class="form-group">
                            <div class="form-check gender-check">
                              <div class="row">
                                <label for="gender">Gender</label>
                              </div>
                              <div class="form-group">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="Male" aria-label="male">
                                Male
                              </div>
                              <div class="form-group">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="Female" aria-label="female">
                                Female
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputDateOfBirth">Date of Brth</label>
                            <input type="text" class="form-control" id="inputDateOfBirth" placeholder="DD/MM/YYYY">
                          </div>
                          <button type="submit" class="btn btn-primary btn-profile mt-4">Save profile information</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-skills" role="tabpanel" aria-labelledby="nav-skills-tab">
                        b
                    </div>
                    <div class="tab-pane fade" id="nav-profileimg" role="tabpanel" aria-labelledby="nav-profileimg-tab">
                        c
                    </div>
                    <div class="tab-pane fade" id="nav-socials" role="tabpanel" aria-labelledby="nav-socials-tab">
                        d
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection