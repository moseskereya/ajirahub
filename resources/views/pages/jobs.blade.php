@extends('layout')
@section('content')
    <!--Page Title-->
    <section class="page-title style-two at-jlv17">
      <div class="auto-container">
        {{-- <div class="title-outer">
                <h1>Find Jobs</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Jobs</li>
                </ul> 
        </div>  --}}

        <!-- Job Search Form -->
        <div class="hero-at-jlv17 text-start mb30">
          <h1 class="text-white text-start">There Are <span class="light-green">93,178</span> Postings Here For you!</h1>
          <p class="text-white">Discover your next career move, freelance gig, or internship</p>
        </div>
        <div class="job-search-form">
          <form method="post" action="job-list-v10.html">
            <div class="row">
              <!-- Form Group -->
              <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <span class="icon flaticon-search-1"></span>
                <input type="text" name="field_name" placeholder="Job title, keywords, or company">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-map-locator"></span>
                <input type="text" name="field_name" placeholder="City or postcode">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-briefcase"></span>
                <select class="chosen-select">
                  <option value="">All Categories</option>
                  <option value="44">Accounting / Finance</option>
                  <option value="106">Automotive Jobs</option>
                  <option value="46">Customer</option>
                  <option value="48">Design</option>
                  <option value="47">Development</option>
                  <option value="45">Health and Care</option>
                  <option value="105">Marketing</option>
                  <option value="107">Project Management</option>
                </select>
              </div>
              <!-- Form Group -->
              <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                <button type="submit" class="theme-btn btn-style-one">Find Jobs</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Job Search Form -->
      </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
      <div class="auto-container">

        <div class="row">
          <!-- Filters Column -->
          <!-- Content Column -->
          <div class="content-column col-lg-12">
            <div class="ls-outer">

              <div class="row">
                <!-- Job Block -->
                <div class="job-block at-jlv17 active col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-2.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-1.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-3.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-2.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-1.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-3.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-2.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-1.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
                <!-- Job Block -->
                <div class="job-block at-jlv17 col-lg-4 col-sm-6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href=""></a>
                      <a class="far fa-bolt" href=""></a>
                      <a class="flaticon-bookmark" href=""></a>
                    </div>
                    <div class="content ps-0">
                      <span class="company-logo position-relative"><img class="w60 mb-3" src="images/resource/company-logo/3-3.png" alt=""></span>
                      <h4 class="fz22 mb-2"><a href="#">Software Engineer (Android) Libraries</a></h4>
                      <p class="mb-2">by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                      <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                        <li class="time">Full Time</li>
                        <li class="time2">London, UK</li>
                        <li class="time2">450 - $900/month</li>
                      </ul>
                      <p class="text">220 days left to apply</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pagination -->
              <nav class="ls-pagination mb-5">
                <ul>
                  <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="current-page">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@endsection