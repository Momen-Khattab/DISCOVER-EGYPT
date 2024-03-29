    @extends('website.layouts.front')

@section('content')  
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/maldives_tropical_bungalows_sky_90627_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Profile</span></p>
              <h1 class="mb-3">My Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
        @if (session()->has('success'))
        <div class="alert alert-success">
          <h5>{{ session()->get('success')}}</h5>
        </div>
        @endif
                <div class="card-body">
                  <form action="{{ url('/profileSave') }}" method="POST">
                    @csrf
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                     <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="Phone" name="phone" value="{{ $user->phone }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" readonly value="{{ $user->email }}" class="disabled form-control">
                        </div>
                      </div>
                    </div>
                    <!--start address section-->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Passport ID</label>
                          <input type="text" name="passport_id" value="{{ $user->passport_id }}" class="form-control">
                        </div>
                      </div>
                    </div>

                    <!--end of address section-->

                  <!--start optional-->
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Job</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating" class="form-control">Gender </label></br>
                            <input type="radio" name="gender" value="male" {{ $user->isMale() ? 'checked' : ''}} >Male</br>
                            <input type="radio" name="gender" value="female" {{ !$user->isMale() ? 'checked' : ''}}>Female
                          </div>
                        </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection