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
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="first_name">First name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" name="last_name" for="last_name">Last name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example97">Email ID</label>
                        <input type="email" name="email" id="form3Example97" class="form-control form-control-lg" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example9">DOB</label>
                        <input type="date" name="dob" id="dob" class="form-control form-control-lg" />
                      </div>
                    </div>
                  </div>
  
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

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
  
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="address" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Address</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="country" class="form-control">
                          <option value="1">Country</option>
                          <option value="2">Option 1</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="state" class=" form-control">
                          <option value="1">State</option>
                          <option value="2">Option 1</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select name="city" class=" form-control">
                          <option value="1">City</option>
                          <option value="2">Option 1</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                   
                    <div class="col-md-6">
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example90"  name="pincode" class="form-control form-control-lg" />
                        <label class="form-label"  for="form3Example90">Pincode</label>
                      </div>
                    </div>
                  </div>
  
                  
                    
                  <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-warning">Submit form</button>
                   
                  </div>

                  {{-- <div class="text-center pt-1 mb-5 pb-1">
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div> --}}

                  {{-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have a account?</p>
                    <a type="button" href="login" class="btn btn-outline-danger">login</a>
                  </div> --}}
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

