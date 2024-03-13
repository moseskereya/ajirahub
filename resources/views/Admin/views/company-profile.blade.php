@extends('layout')
@section('content')
<div class="page-wrapper dashboard mm-page mm-slideout" id="mm-0">

    <!-- Preloader -->
    <div class="preloader" style="display: none;"></div>

    <!-- Header Span -->
    <span class="header-span"></span>
    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>
    <!-- User Sidebar -->
    @include('Admin.nav.sidebar')
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Company Profile!</h3>
          <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Profile</h4>
                </div>
                <form method="post" action="/company" class="default-form" enctype="multipart/form-data">
                  @csrf
                <div class="widget-content">
                  <div class="uploading-outer">
                    <div class="uploadButton">
                      <input type="file" name="logo" placeholder="Company Logo">
                      <label >Browse Cover</label>
                      {{-- <span class="uploadButton-file-name"></span> --}}
                    </div>
                    <div class="text">Max file size is 10MB, Minimum dimension: 330x300 And Suitable files are .jpg &amp; .png</div>
                  </div>

                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company name (optional)</label>
                        <input type="text" name="name" placeholder="Invisionn">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email address</label>
                        <input type="text" name="email" placeholder="creativelayers">
                      </div>
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Phone</label>
                        <input type="tel" name="phone" placeholder="0 123 456 7890">
                      </div>
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Website</label>
                        <input type="url" name="website" placeholder="https://swiftspace.co.tz">
                      </div>
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Est. Since</label>
                        <input type="date" name="estblished_date" placeholder="06.04.2020">
                      </div>
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Team Size</label>
                        <select class="chosen-select" name="team_size" style="display: none;">
                          <option value="">Select Team Size</option>
                          <option value="50 - 100">50 - 100</option>
                          <option value="100 - 150">100 - 150</option>
                          <option value="200 - 250">200 - 250</option>
                          <option value="300 - 350">300 - 350</option>
                          <option value="300 - 350">500 - 1000</option>
                        </select>
                    </div>
                      <!-- About Company -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>About Company</label>
                        <textarea name="about" placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <button class="theme-btn btn-style-one">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Dashboard -->
    <!-- Copyright -->
    <div class="copyright-text">
      <p>© 2021 Superio. All Right Reserved.</p>
    </div>

  </div>
@endsection