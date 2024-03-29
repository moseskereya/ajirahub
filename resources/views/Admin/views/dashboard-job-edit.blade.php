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

      <div class="row">
        <div class="col-lg-12">
          <!-- Ls widget -->
          <div class="ls-widget">
            <div class="tabs-box">
              <div class="widget-title">
                <h4>Edit {{$job->title}}</h4>
              </div>
              <div class="widget-content">
                <form class="default-form" action="/jobsupdate" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Job Title</label>
                      <input type="text" name="title" value="{{ old('title', $job->title) }}" placeholder="Title" required>
                      @error('title')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <!-- About Company -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Job Description</label>
                      <textarea name="description" placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present">
                       {{ old('description', $job->description) }}
                      </textarea>
                    @error('description')
                      <span class="text-danger">{{ $message }}</span><q></q>
                     @enderror
                    </div>
                
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Position(s)</label>
                      <input type="number" name="position" value="{{ old('position', $job->position) }}" placeholder="jobs positions" required>
                      @error('position')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                        <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Image</label>
                      <input type="file" name="image" placeholder="image" required>
                      @error('image')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>  

                      <div class="form-group col-lg-12 col-md-12">
                          <label>Required Skills</label>
                          <textarea name="skills"  value="{{ old('skills', $job->skills) }}"  placeholder="skills 1, skills 2"></textarea>
                        @error('responsibilities')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>

                   <!-- Input -->
                   <div class="form-group col-lg-6 col-md-12">
                       <label>Job Category</label>
                       <select class="chosen-select" name="category_id" required>
                           <option value="">Select Category</option>
                           @foreach ($jobcategories as $category)
                               <option value="{{ $category->id }}" @if(old('category_id', $job->category_id) == $category->id) selected @endif>{{ $category->name }}</option>
                           @endforeach
                       </select>
                       @error('category_id')
                           <span class="text-danger">{{ $message }}</span>
                       @enderror
                   </div>
                   

                    <div class="form-group col-lg-6 col-md-12">
                      <label>Job Type</label>
                      <select class="chosen-select" name="job_type" style="display: none;">
                        <option>Select</option>
                        <option value=""></option>
                        <option value="volunteer">Volunteer</option>
                        <option value="remote">Remote</option>
                        <option value="full-time">Full Time</option>
                        <option value="temporary">Temporary</option>
                        <option value="seasonal">Seasonal</option>
                      </select>
                      @error('job_type')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Responsibilities</label>
                      <textarea name="responsibilities" placeholder="responsibilities 1, responsibilitie 2">
                        {{ $job->responsibilities}}
                      </textarea>
                    @error('responsibilities')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Input -->
                  <div class="form-group col-lg-6 col-md-12">
                    <label>Offered Salary</label>
                      <select name="salary" class="chosen-select" style="display: none;">
                      <option value="">Select</option>
                      <option value="1500">$1500</option>
                        <option value="2000">$2000</option>
                        <option value="2500">$2500</option>
                        <option value="3500">$3500</option>
                        <option value="4500">$4500</option>
                        <option value="5000">$5000</option>
                    </select>
                    @error('salary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                      <label>Career Level</label>
                      <select class="chosen-select" name="education_level" style="display: none;">
                        <option value="">Select</option>
                        <option value="Certificate">Certificate</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor Degree">Bachelor Degree</option>
                        <option value="Masters">Masters</option>
                      </select>
                      @error('education_level')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                      <label>Experience</label>
                      <select class="chosen-select" name="experience_level" style="display: none;">
                        <option>Select</option>
                        <option value="none">No experience</option>
                        <option value="One Year">One Year</option>
                        <option value="More than 2 years">More than 2 years</option>
                        <option value="More than 5 years">More than 5 years</option>
                      </select>
                      @error('experience_level')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Application Deadline Date</label>
                      <input type="date" value="{{old('expiration_date')}}" name="expiration_date" placeholder="06.04.2020">
                      @error('expiration_date')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>City</label>
                      <select class="chosen-select" name="city_id" style="display: none;">
                        <option value="">Select Location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                      </select>
                    </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                      <label>Employer</label>
                      <select class="chosen-select" name="company_id" style="display: none;">
                        <option value="">Select Employer</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 text-right">
                      <button class="theme-btn btn-style-one">Next</button>
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