{{-- <div class="model">
    <div id="login-modal">
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Login to Superio</h3>
                <form method="post" action="/login">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password-field" type="password" name="password" placeholder="Password" required>
                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="field-outer">
                            <div class="input-group checkboxes square">
                                <input type="checkbox" name="remember_me" value="" id="remember">
                                <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                            </div>
                            <a href="#" class="pwd">Forgot password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
                    </div>
                </form>
                <div class="bottom-box">
                    <div class="text">Don't have an account? <a href="/register">Register</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

     --}}


     @extends('layout')
     @section('content')    
       <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
       
         <!-- Info Section -->
         <div class="login-section">
           <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
           <div class="outer-box">
             <!-- Login Form -->
             <div class="login-form default-form">
               <div class="form-inner">
                 <h3>Login to Superio</h3>
                 <!--Login Form-->
                 <form method="post" action="/login">
                  @csrf
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"  value="{{old('email')}}" placeholder="email" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt1">{{$message}}</p>
                    @enderror
                  </div>
     
                  <div class="form-group">
                  <label>Password</label>
                  <input id="password-field" type="password" name="password"  value="{{old('password')}}"placeholder="Password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt1">{{$message}}</p>
                    @enderror
                  </div>

                   <div class="form-group">
                     <div class="field-outer">
                       <div class="input-group checkboxes square">
                         <input type="checkbox" name="remember-me" value="" id="remember">
                         <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                       </div>
                       <a href="#" class="pwd">Forgot password?</a>
                     </div>
                   </div>
     
                   <div class="form-group">
                     <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
                   </div>
                 </form>
     
                 <div class="bottom-box">
                   <div class="text">Don't have an account? <a href="/register">Signup</a></div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     @endsection