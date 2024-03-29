@extends('layout')
@section('content')
      <div class="page-wrapper">
        <div class="login-section">
          <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
          <div class="outer-box">
            <div class="login-form default-form">
              <div class="form-inner">
                <h3>Create a Free Superio Account</h3>
                <form method="post" action="/register">
                  @csrf
                  <input type="hidden" name="type" id="user_type" value="">
                  <div class="form-group">
                    <div class="btn-box row">
                      <div class="col-lg-6 col-md-12">
                        <a href="#" class="theme-btn btn-style-seven" onclick="setUserType(0)"><i class="la la-user"></i> Candidate </a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <a href="#" class="theme-btn btn-style-four" onclick="setUserType(1)"><i class="la la-briefcase"></i> Employer </a>
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" placeholder="UserName" value="{{old('name')}}"  required>
                    @error('name')
                    <p class="danger">{{$message}}</p>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Email" value="{{old('email')}}"  required>
                    @error('email')
                    <p class="danger">{{$message}}</p>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input id="password-field" type="password" name="password" value="{{old('password')}}"  placeholder="Password" required>
                    @error('password')
                    <p class="danger">{{$message}}</p>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Password" required>
                    @error('password_confirmation')
                    <p class="danger">{{$message}}</p>
                   @enderror
                  </div>
                  <div class="form-group">
                    <button class="theme-btn btn-style-one " type="submit" name="Register">Register</button>
                  </div>
                </form>
                <div class="bottom-box">
                  <div class="text">Have an account? <a href="/login" class="call-modal">Log In</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection 


<script>
  function setUserType(type) {
    document.getElementById('user_type').value = type;
  }
</script>