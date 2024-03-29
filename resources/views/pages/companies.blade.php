@extends('layout')
@section('content')
@include('components.companies-banner')
    <!--Page Title-->
    <section class="page-title">
      <div class="auto-container">
        <!-- Job Search Form -->
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
        <div class="filters-backdrop"></div>

        <div class="row">

          <!-- Content Column -->
          <div class="content-column col-lg-12 col-md-12 col-sm-12">
            <div class="ls-outer">
              <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

              <!-- ls Switcher -->
              <div class="ls-switcher">
                <div class="showing-result">
                  <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> employer</div>
                </div>
                <div class="sort-by">

                  <select class="chosen-select">
                    <option>Show 10</option>
                    <option>Show 20</option>
                  </select>
                </div>
              </div>


              <div class="row">
                <!-- Company Block Four -->
                <div class="row">
                    @forelse ($companies as $company)
                    <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                            <span class="featured">Featured</span>
                            <span class="company-logo"><img src="https://creativelayers.net/themes/superio/images/resource/company-logo/6-1.png" alt=""></span>
                            <h4><a href="/company/{{$company->name}}">{{ $company->name }}</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-map-locator"></span> {{$company->address}}</li>
                                <li><span class="icon flaticon-briefcase"></span> {{ $company->industry }}</li>
                            </ul>
                            <div class="job-type">Open Jobs – {{ $company->jobs->count() }}</div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p>No companies found.</p>
                    </div>
                    @endforelse
                </div>
              </div>

              <!-- Pagination -->
              <nav class="ls-pagination">
                {{$companies->links()}}
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@endsection