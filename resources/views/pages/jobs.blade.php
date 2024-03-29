@extends('layout')
@section('content')
    <!--Page Title-->
    <section class="page-title style-two at-jlv17">
      <div class="auto-container">
        <!-- Job Search Form -->
        <div class="hero-at-jlv17 text-start mb30">
          <h1 class="text-white text-start">There Are <span class="light-green">{{$totaljobs}}</span> Postings Here For you!</h1>
          <p class="text-white">Discover your next career move, freelance gig, or internship</p>
        </div>
        <div class="job-search-form">
          <form action="/jobs" method="get" name="search">
            <div class="row">
                <div class="form-group col-lg-5">
                    <span class="icon flaticon-search-1"></span>
                    <input type="search" name="search" placeholder="Job title, keywords, or company">
                </div>
                <div class="form-group col-lg-4">
                    <span class="icon flaticon-folder"></span>
                    <select name="category" id="category">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-3 btn-box">
                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></button>
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
                @forelse($jobs as $job)
                    <div class="job-block at-jlv17  col-lg-4 col-sm-6">
                        <div class="inner-box">
                            <div class="tags d-flex align-items-center">
                              @if ($job->urgent == true)
                                 <a class="far fa-bolt" style="color: orange" href=""></a>   
                              @endif
                                <a class="flaticon-bookmark" href=""></a>
                            </div>
                            <div class="content ps-0">
                                <span class="company-logo position-relative"><img class="w60 mb-3" src="https://creativelayers.net/themes/superio/images/resource/company-logo/6-1.png" alt=""></span>
                                <h4 class="fz22 mb-2"><a href="/jobs/job/{{$job->id}}">{{ $job->title }}</a></h4>
                                <p class="mb-2">by <span class="fw500 text">{{ $job->company->name }}</span></p>
                                <ul class="job-other-info at-jsv6 at-jsv17 mt20 ms-0">
                                    <li class="time">{{ $job->job_type }}</li>
                                    <li class="time2">{{ $job->city->name }},</li>
                                    <li class="time2">${{ $job->salary }}/month</li>
                                </ul>
                                <p class="text">{{ $job->expiration_date->diffForHumans(null, true) }} left to apply</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info" role="alert">
                        No jobs are currently available. Please check back later.
                    </div>
                @endforelse
            </div>
              <!-- Pagination -->
             {{$jobs->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@endsection