@extends('layout')
@section('content')
    <!-- Banner Section-->
    @include('components.banner')
    <!-- End Banner Section-->
        <!-- Job Categories -->
        <section class="layout-pt-60 layout-pb-60 border-bottom-none">
          <div class="auto-container">
            <div class="d-flex align-items-center justify-content-between wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
              <div class="sec-title">
                <h2>Browse by Category</h2>
                <div class="text">{{$totaljobs}} Jobs live - {{$jobsAddedToday}} added today.</div>
              </div>
              <a href="" class="text ud-btn2" previewlistener="true">See all <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-money-1"></span>
                    <h4><a href="#">Marketing</a></h4>
                    <p>(86 open positions)</p>
                  </div>
                </div>
              </div>
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-promotion"></span>
                    <h4><a href="#">Design</a></h4>
                    <p>(43 open positions)</p>
                  </div>
                </div>
              </div>
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-vector"></span>
                    <h4><a href="#">Development</a></h4>
                    <p>(12 open positions)</p>
                  </div>
                </div>
              </div>
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-web-programming"></span>
                    <h4><a href="#">Customer Service</a></h4>
                    <p>(72 open positions)</p>
                  </div>
                </div>
              </div>
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-headhunting"></span>
                    <h4><a href="#">Health and Care</a></h4>
                    <p>(25 open positions)</p>
                  </div>
                </div>
              </div>
              <!-- Category Block -->
              <div class="category-block-two at-home21 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-rocket-ship"></span>
                    <h4><a href="#">Automotive Jobs</a></h4>
                    <p>(92 open positions)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Job Categories -->
    
        <!-- steps Section -->
        <section class="steps-section layout-pt-60 layout-pb-60">
          <div class="auto-container">
            <div class="row">
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <figure class="image"><img src="images/index-11/text/image-1.png" alt=""></figure>
                </div>
              </div>
    
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp">
                  <div class="sec-title -type-2">
                    <h2>Find Jobs with 3 easy<br> steps</h2>
                    <div class="text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</div>
                    <ul class="steps-list">
                      <li><span class="count">01</span> Register an account to start</li>
                      <li><span class="count">02</span> Explore over thousands of resumes</li>
                      <li><span class="count">03</span> Find the most suitable candidate</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Steps Section -->
    
        <!-- About Section -->
        <section class="about-section-two style-two layout-pt-60 layout-pb-120">
          <div class="auto-container">
            <div class="row grid-base">
              <!-- Content Column -->
              <div class="content-column mb-0 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                  <div class="sec-title">
                    <h2>Getting Applied by an <br>Expert Talent</h2>
                    <div class="text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.</div>
                    <div class="text">Software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages</div>
                  </div>
                  <a href="#" class="theme-btn btn-style-seven bg-orange">Search Candidate</a>
                </div>
              </div>
    
              <!-- Image Column -->
              <div class="image-column mb-30 md:mt-0 col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                <figure class="image-box"><img src="images/index-11/text/image-2.png" alt=""></figure>
    
                <!-- Count Employers -->
                <div class="applicants-list -pos-2">
                  <div class="title-box bg-purple">
                    <h4>Applicants List</h4>
                  </div>
                  <ul class="applicants">
                    <li class="applicant">
                      <figure class="image"><img src="images/resource/applicant-1.png" alt=""></figure>
                      <h4 class="name">Brooklyn Simmons</h4>
                      <span class="designation">Web Developer</span>
                    </li>
    
                    <li class="applicant">
                      <figure class="image"><img src="images/resource/applicant-2.png" alt=""></figure>
                      <h4 class="name">Courtney Henry</h4>
                      <span class="designation">Web Developer</span>
                    </li>
    
                    <li class="applicant">
                      <figure class="image"><img src="images/resource/applicant-3.png" alt=""></figure>
                      <h4 class="name">Marvin McKinney</h4>
                      <span class="designation">Web Developer</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About Section -->
    
        <!-- Job Section -->
        <section class="job-section bg-light-blue layout-pt-120 layout-pb-120">
          <div class="bg-shape -top -left js-rellax" data-rellax-speed="0" data-rellax-desktop-speed="-2" data-rellax-percentage="0.5">
            <img src="images/index-11/shapes/2.png" alt="image">
          </div>
    
          <div class="auto-container">
            <div class="sec-title -type-2 text-center">
              <h2>Featured Jobs</h2>
              <div class="text">Know your worth and find the job that qualify your life</div>
            </div>
    
            <div class="default-tabs tabs-box">
              <!--Tabs Box-->
              <ul class="tab-buttons -pills">
                <li class="tab-btn active-btn" data-tab="#tab1">Popular Jobs</li>
                @foreach($categories as $category)
                    <li class="tab-btn" data-tab="#tab{{ $loop->iteration + 1 }}">{{ $category->name }}</li>
                @endforeach
            </ul>
    
              <div class="tabs-content wow fadeInUp">
                <!--Tab-->
                <div class="tab" id="tab1">
                  <div class="row job-blocks">
                      @foreach($jobs as $job)
                          <div class="job-block col-lg-4 col-md-6 col-sm-12">
                              <div class="inner-box">
                                  <div class="content">
                                      <span class="company-logo">
                                        <img class="rounded-full" src="images/resource/company-logo/{{ $job->company_id }}.png" alt="">
                                      </span>
                                      <h4><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                      <ul class="job-info">
                                          <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                          <li><span class="icon flaticon-map-locator"></span> {{ $job->city->name }}</li>
                                      </ul>
                                      <ul class="job-other-info">
                                          @if($job->urgent)
                                              <li class="required">Urgent</li>
                                          @endif
                                          <li class="time">{{ $job->job_type }}</li>
                                      </ul>
                                      <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
              
    
                <!--Tab-->
                <div class="tab  active-tab" id="tab2">
                  <div class="row">
                    <div class="row job-blocks">
                      @foreach($itJobs as $job)
                          <div class="job-block col-lg-4 col-md-6 col-sm-12">
                              <div class="inner-box">
                                  <div class="content">
                                      <span class="company-logo"><img class="rounded-full" src="images/resource/company-logo/{{ $job->company_id }}.png" alt=""></span>
                                      <h4><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                      <ul class="job-info">
                                          <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                          <li><span class="icon flaticon-map-locator"></span> {{ $job->city->name }}</li>
                                      </ul>
                                      <ul class="job-other-info">
                                          @if($job->urgent)
                                              <li class="required">Urgent</li>
                                          @endif
                                          <li class="time">{{ $job->job_type }}</li>
                                      </ul>
                                      <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
                  </div>
                </div>
    
                <!--Tab-->
                <div class="tab" id="tab3">
                  <div class="row">
                    <div class="row job-blocks">
                      @foreach($healthJobs  as $job)
                          <div class="job-block col-lg-4 col-md-6 col-sm-12">
                              <div class="inner-box">
                                  <div class="content">
                                      <span class="company-logo"><img class="rounded-full" src="images/resource/company-logo/{{ $job->company_id }}.png" alt=""></span>
                                      <h4><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                      <ul class="job-info">
                                          <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                          <li><span class="icon flaticon-map-locator"></span> {{ $job->city->name }}</li>
                                      </ul>
                                      <ul class="job-other-info">
                                          @if($job->urgent)
                                              <li class="required">Urgent</li>
                                          @endif
                                          <li class="time">{{ $job->job_type }}</li>
                                      </ul>
                                      <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
                  </div>
                </div>
    
                <!--Tab-->
                <div class="tab" id="tab4">
                  <div class="row job-blocks">
                    @foreach($finaceJobs  as $job)
                        <div class="job-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <span class="company-logo"><img class="rounded-full" src="images/resource/company-logo/{{ $job->company_id }}.png" alt=""></span>
                                    <h4><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                        <li><span class="icon flaticon-map-locator"></span> {{ $job->city->name }}</li>
                                    </ul>
                                    <ul class="job-other-info">
                                        @if($job->urgent)
                                            <li class="required">Urgent</li>
                                        @endif
                                        <li class="time">{{ $job->job_type }}</li>
                                    </ul>
                                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>

                
                <!--Tab-->
                <div class="tab" id="tab5">
                  <div class="row job-blocks">
                    @foreach($educationJobs  as $job)
                        <div class="job-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <span class="company-logo"><img class="rounded-full" src="images/resource/company-logo/{{ $job->company_id }}.png" alt=""></span>
                                    <h4><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                        <li><span class="icon flaticon-map-locator"></span> {{ $job->city->name }}</li>
                                    </ul>
                                    <ul class="job-other-info">
                                        @if($job->urgent)
                                            <li class="required">Urgent</li>
                                        @endif
                                        <li class="time">{{ $job->job_type }}</li>
                                    </ul>
                                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Job Section -->
        {{-- cities --}}
        <section class="layout-pt-60 layout-pb-60">
          <div class="auto-container">
            <div class="sec-title-outer">
              <div class="sec-title">
                <h2>Featured Cities</h2>
                <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
              </div>
              <a href="#" class="link bs-gray-100">Browse All Locations <span class="fa fa-angle-right"></span></a>
            </div>
    
            <div class="row wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    
              <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                  <div class="inner-box">
                    <figure class="image"><img src="images/index-15/cities/1.png" alt=""></figure>
                    <div class="overlay-box">
                      <div class="content">
                        <h5>Arusha</h5>
                        <span class="total-jobs">12 Jobs</span>
                        <a href="job-list-v1.html" class="overlay-link" previewlistener="true"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                  <div class="inner-box">
                    <figure class="image"><img src="images/index-15/cities/2.png" alt=""></figure>
                    <div class="overlay-box">
                      <div class="content">
                        <h5>Dar Es Salaam</h5>
                        <span class="total-jobs">12 Jobs</span>
                        <a href="job-list-v1.html" class="overlay-link" previewlistener="true"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                  <div class="inner-box">
                    <figure class="image"><img src="images/index-15/cities/3.png" alt=""></figure>
                    <div class="overlay-box">
                      <div class="content">
                        <h5>Dodoma</h5>
                        <span class="total-jobs">12 Jobs</span>
                        <a href="job-list-v1.html" class="overlay-link" previewlistener="true"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                  <div class="inner-box">
                    <figure class="image"><img src="images/index-15/cities/4.png" alt=""></figure>
                    <div class="overlay-box">
                      <div class="content">
                        <h5>Nairobi</h5>
                        <span class="total-jobs">12 Jobs</span>
                        <a href="job-list-v1.html" class="overlay-link" previewlistener="true"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </section>

        {{-- //cities --}}

        {{-- articles --}}

        <section class="cta-home21-1 layout-pt-120 layout-pb-40">
          <div class="auto-container">
            <div class="row align-items-center">
              <!-- Content Column -->
              <div class="content-column col-md-6 col-lg-4 offset-lg-1 order-2">
                <div class="inner-column wow fadeInRight pt-0 animated" style="visibility: visible; animation-name: fadeInRight;">
                  <div class="sec-title mb-4">
                    <h2>Get Over 75.000+ Talented <br class="d-none d-xl-block">Experts in Superio</h2>
                    <div class="text">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide.</div>
                  </div>
                  <ul class="list-style-one at-home22 mb40 mt40">
                    <li>Bring to the table win-win survival</li>
                    <li>Capitalize on low hanging fruit to identify</li>
                    <li>But I must explain to you how all this</li>
                  </ul>
                  <a href="#" class="theme-btn btn-style-one">Post a Job <i class="fal fa-long-arrow-right ms-3"></i></a>
                </div>
              </div>
    
              <!-- Image Column -->
              <div class="image-column col-md-6 col-lg-6 mb-4 mb-lg-0">
                <figure class="image-box wow fadeInLeft mx-0 animated" style="visibility: visible; animation-name: fadeInLeft;">
                  <img src="images/index-21/about-1.png" alt=""></figure>
              </div>
            </div>
          </div>
        </section>

        <section class="news-section">
          <div class="auto-container">
            <div class="sec-title text-center">
              <h2>Recent News Articles</h2>
              <div class="text">Fresh job related news content posted each day.</div>
            </div>
    
            <div class="row wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
              <!-- News Block -->
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="images/resource/news-1.jpg" alt=""></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">August 31, 2021</a></li>
                      <li><a href="#">12 Comment</a></li>
                    </ul>
                    <h3><a href="blog-single.html" previewlistener="true">Attract Sales And Profits</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
    
              <!-- News Block -->
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="images/resource/news-2.jpg" alt=""></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">August 31, 2021</a></li>
                      <li><a href="#">12 Comment</a></li>
                    </ul>
                    <h3><a href="blog-single.html" previewlistener="true">5 Tips For Your Job Interviews</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
    
              <!-- News Block -->
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="images/resource/news-3.jpg" alt=""></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">August 31, 2021</a></li>
                      <li><a href="#">12 Comment</a></li>
                    </ul>
                    <h3><a href="blog-single.html" previewlistener="true">An Overworked Newspaper Editor</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- //articles --}}
    
        <!-- App Section -->
        <section class="app-section layout-pt-120">
          <div class="bg-shape -top -right js-rellax" data-rellax-speed="0" data-rellax-desktop-speed="-2" data-rellax-percentage="0.5">
            <img src="images/index-11/shapes/3.png" alt="image">
          </div>
    
          <div class="auto-container">
            <div class="row justify-content-between align-items-center">
              <!-- Image Column -->
              <div class="image-column col-lg-6 col-md-12 col-sm-12 order-1">
                <div class="bg-shape"></div>
                <figure class="image wow fadeInLeft"><img src="images/index-11/download/1.png" alt=""></figure>
              </div>
    
              <div class="content-column col-lg-5 col-md-12 col-sm-12 order-2">
                <div class="text-left inner-column pt-0 pb-0 wow fadeInRight">
                  <div class="sec-title">
                    <span class="sub-title">DOWNLOAD & ENJOY</span>
                    <h2>Get the Superio Job Search App</h2>
                  </div>
    
                  <div class="content-icons">
    
                    <div class="item">
                      <div class="icon-wrap">
                        <span class="icon icon-case"></span>
                      </div>
                      <div class="content">
                        <h4>Job Search</h4>
                        <p>Search through millions of jobs and find the right fit. Simply swipe right to apply.</p>
                      </div>
                    </div>
    
                    <div class="item">
                      <div class="icon-wrap">
                        <span class="icon icon-contact"></span>
                      </div>
                      <div class="content">
                        <h4>Search on the go</h4>
                        <p>Search through millions of jobs and find the right fit. Simply swipe right to apply.</p>
                      </div>
                    </div>
    
                    <div class="item">
                      <div class="icon-wrap">
                        <span class="icon icon-doc"></span>
                      </div>
                      <div class="content">
                        <h4>Instant Notifications</h4>
                        <p>Search through millions of jobs and find the right fit. Simply swipe right to apply.</p>
                      </div>
                    </div>
    
                  </div>
    
                  <div class="download-btn content-icons-btn">
                    <a href="#"><img src="images/icons/apple.png" alt=""></a>
                    <a href="#"><img src="images/icons/google.png" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End App Section -->
    
        <!-- Pricing Section -->
        <section class="pricing-section pb-0">
          <div class="auto-container">
            <div class="sec-title -type-2 text-center">
              <h2>Pricing Packages</h2>
              <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</div>
            </div>
    
            <div class="row grid-base wow fadeInUp">
    
              <div class="col-lg-3 col-md-6">
                <div class="pricingCard">
                  <div class="pricingCard__img">
                    <img src="images/index-11/pricing/1.png" alt="images">
                  </div>
                  <h4 class="pricingCard__title">Start Up</h4>
                  <div class="pricingCard__price">Free</div>
                  <div class="pricingCard__subtitle">per month</div>
    
                  <ul class="pricingCard__list">
                    <li>1 job posting</li>
                    <li>0 featured job</li>
                    <li>Job displayed for 20 days</li>
                    <li>Premium Support 24/7</li>
                  </ul>
    
                  <div class="pricingCard__btn">
                    <a href="#" class="theme-btn btn-style-modern">
                      Join This Plan
                    </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="pricingCard">
                  <div class="pricingCard__img">
                    <img src="images/index-11/pricing/2.png" alt="images">
                  </div>
                  <h4 class="pricingCard__title">Company</h4>
                  <div class="pricingCard__price">$599</div>
                  <div class="pricingCard__subtitle">per month</div>
    
                  <ul class="pricingCard__list">
                    <li>1 job posting</li>
                    <li>0 featured job</li>
                    <li>Job displayed for 20 days</li>
                    <li>Premium Support 24/7</li>
                  </ul>
    
                  <div class="pricingCard__btn">
                    <a href="#" class="theme-btn btn-style-modern">
                      Join This Plan
                    </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="pricingCard">
                  <div class="pricingCard__img">
                    <img src="images/index-11/pricing/3.png" alt="images">
                  </div>
                  <h4 class="pricingCard__title">Enterprise</h4>
                  <div class="pricingCard__price">$999</div>
                  <div class="pricingCard__subtitle">per month</div>
    
                  <ul class="pricingCard__list">
                    <li>1 job posting</li>
                    <li>0 featured job</li>
                    <li>Job displayed for 20 days</li>
                    <li>Premium Support 24/7</li>
                  </ul>
    
                  <div class="pricingCard__btn">
                    <a href="#" class="theme-btn btn-style-modern">
                      Join This Plan
                    </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="pricingCard">
                  <div class="pricingCard__img">
                    <img src="images/index-11/pricing/4.png" alt="images">
                  </div>
                  <h4 class="pricingCard__title">Business</h4>
                  <div class="pricingCard__price">$2999</div>
                  <div class="pricingCard__subtitle">per month</div>
    
                  <ul class="pricingCard__list">
                    <li>1 job posting</li>
                    <li>0 featured job</li>
                    <li>Job displayed for 20 days</li>
                    <li>Premium Support 24/7</li>
                  </ul>
    
                  <div class="pricingCard__btn">
                    <a href="#" class="theme-btn btn-style-modern">
                      Join This Plan
                    </a>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </section>
        <!-- End Pricing Section -->
    
        <!-- Clients Section -->
        <section class="clients-section-two alternate layout-pt-40">
          <div class="auto-container">
            <div class="sponsors-outer wow fadeInUp">
              <!--Sponsors Carousel-->
              <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/1.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/2.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/3.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/4.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/5.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/6.svg" alt=""></a></figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="images/index-11/clients/7.svg" alt=""></a></figure>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- End Clients Section -->
@endsection