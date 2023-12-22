@extends('frontend.layouts.main')
@section('main-container')
</div>
  <!-- end hero area -->

  <!-- registration form section -->

  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                      <h3 class="mb-5 text-uppercase">Registration form</h3>
                  </div>
                <form action="{{route('store')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" placeholder="First Name" />
                    </div>
                   
                    <div class="col-md-6 mb-4">
                        <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" placeholder="Last Name" />
                    </div>
                    @if($errors->has('first_name'))<div class="text-danger">{{ $errors->first('first_name') }}</div>@endif
                    @if($errors->has('last_name'))<div class="text-danger">{{ $errors->first('last_name') }}</div>@endif
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="email" name="email" id="form3Example97" class="form-control form-control-lg" placeholder="Email" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                      </div>
                    </div>
                    @if($errors->has('email'))<div class="text-danger">{{ $errors->first('email') }}</div>@endif
                    @if($errors->has('password'))<div class="text-danger">{{ $errors->first('password') }}</div>@endif
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="address" id="form3Example9" class="form-control form-control-lg" placeholder="Addres
                        s"/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="country" class="form-control">
                          
                          <option value="1">Country</option>
                          @foreach($countries['data'] as $country)
                            @foreach($country as $ca)
                          <option value="1">{{$ca}}</option>
                          @endforeach
                          @endforeach
                        </select>
                      </div>
                    </div>
                    @if($errors->has('address'))<div class="text-danger">{{ $errors->first('address') }}</div>@endif
                    @if($errors->has('country'))<div class="text-danger">{{ $errors->first('country') }}</div>@endif
                  </div>

                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="state" class=" form-control">
                          <option value="1">State</option>
                          <option value="2">punjab</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="city" class=" form-control">
                          <option value="1">City</option>
                          <option value="2">Ludhiana</option>
                        </select>
                      </div>
                    </div>
                    @if($errors->has('state'))<div class="text-danger">{{ $errors->first('state') }}</div>@endif
                    @if($errors->has('city'))<div class="text-danger">{{ $errors->first('city') }}</div>@endif
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example90"  name="pincode" class="form-control form-control-lg" placeholder="Pincode" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="date" name="dob" id="dob" class="form-control form-control-lg" placeholder="Dob"/>
                      </div>
                    </div>
                    @if($errors->has('pincode'))<div class="text-danger">{{ $errors->first('pincode') }}</div>@endif
                    @if($errors->has('dob'))<div class="text-danger">{{ $errors->first('dob') }}</div>@endif
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2" >

                    <h6 class="mb-0 me-4">Gender: </h6>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                        value="option1" />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
                    @if($errors->has('gender'))<div class="text-danger">{{ $errors->first('gender') }}</div>@endif
                  </div>

                  <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-warning">Submit form</button>
                   
                  </div>

                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end registration form section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gb road 123 london Uk </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+01 12345678901</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> demo@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection

