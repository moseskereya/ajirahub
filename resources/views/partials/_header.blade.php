    <header class="main-header -type-11">
      <!-- Main box -->
      <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer">
          <div class="logo-box">
            <div class="logo"><a href="/"><img src="images/logo-2.svg" alt="" title=""></a></div>
          </div>

          <nav class="nav main-menu">
            <ul class="navigation" id="navbar">
              <li class="current">
                 <li><a href="/">Home</a></li>
              </li>

              <li class="dropdown has-mega-menu" id="has-mega-menu">
                <span>Find Jobs</span>
                <div class="mega-menu">
                  <div class="mega-menu-bar row">
                    <div class="column col-lg-3 col-md-3 col-sm-12">
                      <h3>Jobs Listing</h3>
                      <ul>
                        <li><a href="/jobs">Jobs List</a></li>
                    </div>

                    <div class="column col-lg-3 col-md-3 col-sm-12">
                      <ul>
                        <li><a href="job-list-v6.html">Browse by Categories</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              
              <li class="dropdown">
                <span>Partners</span>
                <ul>
                  <li class="dropdown">
                    <span>Partners</span>
                  </li>
                </ul>
              </li>

              <li class="dropdown">
                <span>Blog</span>
                <ul>
                  <li><a href="/blogs">Blogs</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <span>Our Resources</span>
                <ul>
                  <li class="dropdown">
                    <span>Resources</span>
                    <ul>
                      <li class="dropdown">
                        <span>Trainings</span>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="dropdown">
                <span>Pages</span>
                <ul>
                  <li><a href="/about">About</a></li>
                  <li><a href="/pricing">Pricing</a></li>
                  <li><a href="/faqs">FAQ's</a></li>
                  <li><a href="/terms">Terms</a></li>
                </ul>
            </li>

                <li>
                    <li><a href="/contacts">Contacts</a></li>
                </li>

              <!-- Only for Mobile View -->
              <li class="mm-add-listing">
                <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>
                <span>
                  <span class="contact-info">
                    <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456 7890</a></span>
                    <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051, Australia.</span>
                    <a href="mailto:support@superio.com" class="email">support@superio.com</a>
                  </span>
                  <span class="social-links">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-linkedin-in"></span></a>
                  </span>
                </span>
              </li>
            </ul>
          </nav>
          <!-- Main Menu End-->
        </div>

    <div class="outer-box">
        @auth
            <div class="user-info" style="display:flex; justify-content:space-around;">
                <span style="color: white;">Welcome, {{ Auth::user()->name }}</span>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="theme-btn btn-style-three">Logout</button>
                </form>
            </div>
        @else
            <div class="btn-box">
                <a href="/login" class="theme-btn btn-style-three call-modal">Login / Register</a>
            </div>
        @endauth
     </div>
    </div>
    
      <div class="mobile-header">
        <div class="logo"><a href="/"><img src="images/logo.svg" alt="" title=""></a></div>
        <div class="nav-outer clearfix">
          <div class="outer-box">
              @auth
                <span>Welcome, {{ Auth::user()->name }}</span>
              @else
            <div class="login-box">
              <a href="/login" class="call-modal"><span class="icon-user"></span></a>
            </div>
              @endauth
            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>
      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>