@extends('layout')
@section('content')
    <!-- Job Detail Section -->
    <section class="job-detail-section at-jsv7">
      <!-- Upper Box -->
      <div class="upper-box">
        <div class="auto-container">
          <!-- Job Block -->
          <div class="job-block-seven at-jsv7">
            <div class="inner-box row">
              <div class="col-lg-8">
                <div class="position-relative">
                  <div class="tags">
                    <a class="flaticon-bookmark" href="#"></a>
                  </div>
                  <div class="content ps-0">
                    <div class="d-sm-flex align-items-center">
                      <figure class="image mb-sm-0"><img class="rounded-circle w60" src="images/resource/company-logo/3-1.png" alt=""></figure>
                      <div class="ms-0 ms-sm-3">
                        <h4 class="fz20 mb-0"><a href="#">{{$job->title}}</a></h4>
                        <p>by <span class="fw500 text">{{$job->company->name}}</span> in {{$job->company->industry}}</p>
                      </div>
                    </div>
                    <ul class="job-other-info d-sm-flex ms-0 at-jsv7 mt30">
                      <li class="time">{{$job->job_type}}</li>
                      <li class="time2">{{$job->city->name}}</li>
                      <li class="time2">{{ $job->created_at->diffForHumans(null, true) }} a go</li>
                      <li class="time2">$ {{$job->salary}}</li>
                      <li class="time2">847 (views)</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="text-lg-end">
                  <div class="titles mb-3 mb-sm-0">
                    <h4 class="fz20 fw500 mb-1">Application Ends</h4>
                    <p class="text mb15">{{ $job->expiration_date->diffForHumans(null, true) }}</p>
                  </div>
                </div>
                <div class="btn-box">
                  <a href="#apply" class="theme-btn btn-style-one" onclick="smoothScroll(event)">Apply Now</a>
              </div>              
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="job-detail-outer">
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
              <div class="job-detail">
                <h4 class="fz30 fw500">Description</h4>
                <p class="text">{{$job->description}}</p>
                <h4>Key Responsibilities</h4>
                <ul class="list-style-three">
                  <li class="dark-color">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                  <li class="dark-color">Work with BAs, product managers and tech teams to lead the Product Design</li>
                  <li class="dark-color">Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>
                  <li class="dark-color">Accurately estimate design tickets during planning sessions.</li>
                  <li class="dark-color">Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>
                  <li class="dark-color">Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li>
                  <li class="dark-color">Design pixel perfect responsive UI’s and understand that adopting common interface patterns is better for UX than reinventing the wheel</li>
                  <li class="dark-color">Present your work to the wider business at Show & Tell sessions.</li>
                </ul>
                <h4>Skill & Experience</h4>
                <ul class="list-style-three">
                  <li class="dark-color">You have at least 3 years’ experience working as a Product Designer.</li>
                  <li class="dark-color">You have experience using Sketch and InVision or Framer X</li>
                  <li class="dark-color">You have some previous experience working in an agile environment – Think two-week sprints.</li>
                  <li class="dark-color">You are familiar using Jira and Confluence in your workflow</li>
                </ul>
              </div>
              <hr class="opacity-100">

              <!-- Job Skill -->
              <div class="job-skill-widget mb30">
                <h5 class="fz18 fw500">Job Skill</h5>
                <ul class="job-other-info at-jsv7 bottom d-sm-flex align-items-center mt20">
                  <li class="time bg-gray">Marketing Jobs</li>
                  <li class="time2">Designer</li>
                  <li class="time2">Engimeering</li>
                  <li class="time2">Developer</li>
                  <li class="time2">Security Jobs</li>
                </ul>
              </div>
              <!-- Related Jobs -->
              <div class="related-jobs">
                <div class="title-box">
                  <h3>Similar jobs</h3>
                  <div class="text">2020 jobs live - 293 added today.</div>
                </div>

                <!-- Job Block -->
                @forelse ($relatedJobs as $relatedJob)
                <div class="job-block at-jsv6">
                  <div class="inner-box">
                    <div class="tags d-flex align-items-center">
                      <a class="far fa-crown" href="#"></a>
                      <a class="far fa-bolt" href="#"></a>
                      <a class="flaticon-bookmark" href="#"></a>
                    </div>
                    <div class="content ps-0">
                      <div class="d-sm-flex align-items-center">
                        <figure class="image mb-sm-0"><img class="rounded-circle w60" src="images/resource/company-logo/3-1.png" alt=""></figure>
                        <div class="ms-0 ms-sm-3">
                          <h4 class="fz20 mb-0"><a href="#">{{$relatedJob->title}}</a></h4>
                          <p>by <span class="fw500 text">{{$relatedJob->company->name}}</span> {{$relatedJob->company->industry}}</p>
                        </div>
                      </div>
                      <ul class="job-other-info d-sm-flex ms-0 at-jsv6 mt30">
                        <li class="time">{{$relatedJob->job_type}}</li>
                        <li class="time2">{{$relatedJob->city->name}}</li>
                        <li class="time2">{{ $relatedJob->created_at->diffForHumans(null, true) }} a go</li>
                        <li class="time2">$ {{$relatedJob->salary}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @empty
                    <span>no related jobs found</span>
                @endforelse
  

              </div>
            </div>

            <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
              <aside class="sidebar">
                <div class="sidebar-widget at-jsv7">
                  <h4 class="widget-title">Job Overview</h4>
                  <div class="widget-content">
                    <ul class="job-overview at-sv5">
                      <li>
                        <i class="icon flaticon-title"></i>
                        <div class="ml15">
                          <h5>Qualification</h5>
                          <span>{{$job->experience_level}}</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon fal fa-circle-dollar"></i>
                        <div class="ml15">
                          <h5>Offered Salary</h5>
                          <span>{{$job->salary}} / month</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon flaticon-map-locator"></i>
                        <div class="ml15">
                          <h5>Hiring location</h5>
                          <span>{{$job->company->address}}</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon icon-calendar"></i>
                        <div class="ml15">
                          <h5>Date Posted</h5>
                          <span>{{ \Carbon\Carbon::parse($job->created_at)->format('l jS F Y') }}</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon flaticon-profit"></i>
                        <div class="ml15">
                          <h5>Career Level</h5>
                          <span>{{$job->education_level}}</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon far fa-mars"></i>
                        <div class="ml15">
                          <h5>Gender</h5>
                          <span>Both</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon flaticon-man"></i>
                        <div class="ml15">
                          <h5>Experience</h5>
                          <span>{{$job->experience_level}}</span>
                        </div>
                      </li>
                      <li>
                        <i class="icon fal fa-hourglass-end"></i>
                        <div class="ml15">
                          <h5>Expiration date</h5>
                          <span> {{ \Carbon\Carbon::parse($job->expiration_date)->format('l jS F Y') }}</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="text-center">
                    <div class="social-link-style1">
                      <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                      <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
                <div class="sidebar-widget company-widget at-jsv6">
                  <div class="widget-content">
                    <div class="company-title">
                      <div class="company-logo"><img src="images/resource/company-7.png" alt=""></div>
                      <h5 class="company-name">{{$job->company->name}}</h5>
                      <a href="#" class="profile-link">View company profile</a>
                    </div>
                    <ul class="company-info">
                      <li>Primary industry: <span>{{$job->company->industry}}</span></li>
                      <li>Company size: <span>{{$job->company->team_size}}</span></li>
                      <li>Founded in: <span>{{$job->company->estblished_date}}</span></li>
                      <li>Phone: <span><a href="tel:+{{$job->company->phone}}">{{$job->company->phone}}</a></span></li>
                      <li>Email: <span><a href="mailto:{{$job->company->email}}">{{$job->company->email}}</a></span></li>
                      <li>Location: <span>{{$job->company->address}}</span></li>
                    </ul>
                    <div class="btn-box"><a href="{{$job->company->website}}" target="_blank" class="theme-btn btn-style-three">{{$job->company->website}}</a></div>
                    <div class="text-center">
                      <div class="social-link-style1">
                        <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-0">
                  <!-- Job Skills -->
                  <h4 class="widget-title fz18 mb25 fw500">Send your applications</h4>
                  <div id="apply">
                    <div>
                        <div class="login-form default-form">
                            <div class="form-inner">
                                <h3>Apply for this role</h3>
                                  <form class="default-form" action="/applications" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input hidden type="text" name="job_id" value="{{$job->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="your name" required>
                                        @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" required>
                                        @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input  type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
                                        @error('phone')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Your CV</label>
                                        <div class="field-outer">
                                            <div class="input-group checkboxes square">
                                                <input type="file" name="cv">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="apply">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   </div>
                
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Job Detail Section -->
  <!--Google Map APi Key-->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>
  <script src="js/map-script.js"></script>
@endsection