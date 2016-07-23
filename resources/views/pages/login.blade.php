@extends('layouts.web')

@section('title')
  Home
@endsection

@section('content')
  <div class="row main">

      <div class="signin col-md-4 col-md-offset-1 col-sm-5">
          <h3 class="heading">Sign In</h3>
          <form method="post" action="{{ route('member-login') }}">

              @if(Session::has('action_message_login'))
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{ Session::get('action_message_login') }}
                </div>
              @endif
              
              {{ csrf_field() }}

              <div class="form-group">
                  <label for="email" class="control-label">Your Email</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="emaill" id="email" placeholder="Enter your Email" value="{{ Request::old('emaill') }}" />
                  </div>
              </div>

              <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                  </div>
              </div>

              <div class="form-group ">
                  <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
              </div>

          </form>
      </div>

      <div class="col-md-2 col-sm-2">
          <div class="mid">
              <p class="text-center">OR</p>
          </div>
      </div>

      <div class="signup col-md-4 col-sm-5">
          <h3 class="heading">Sign Up</h3>
          <form class="" method="post" action="{{ route('register-memeber') }}" enctype="multipart/form-data">
              
              {{ csrf_field() }}

              <div class="form-group">
                  <label for="name" class="control-label">Your Name</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" value="{{ Request::old('name') }}" />
                  </div>
                  <label class="error-label">{{ $errors->first('name') }}</label>
              </div>

              <div class="form-group">
                  <label for="email" class="control-label">Your Email</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" value="{{ Request::old('email') }}" />
                  </div>
                  <label class="error-label">{{ $errors->first('email') }}</label>
              </div>

              <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                  </div>
                  <label class="error-label">{{ $errors->first('password') }}</label>
              </div>

              <div class="form-group">
                  <label for="contact" class="control-label">Contact No.</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your Contact" value="{{ Request::old('contact') }}" />
                  </div>
              </div>

              <div class="form-group">
                  <label for="photo" class="control-label">Photo</label>
                  <div class="input-group">
                      <input type="file" name="photo" id="photo" value="">
                  </div>
                  <label class="error-label">{{ $errors->first('photo') }}</label>
              </div>

              <div class="form-group ">
                  <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
              </div>

          </form>
      </div>

  </div>

@endsection
