  <section class="banner-section -type-11">
      <div class="auto-container">
        <div class="row">
          <div class="content-column col-xl-7 col-lg-8">
            <div class="inner-column">
              <div class="title-box wow fadeInUp" data-wow-delay="300ms">
                <h3>There Are {{$totaljobs}} Postings Here For you!</h3>
                <div class="text text-white">Find Jobs, Employment & Career Opportunities</div>
              </div>

              <!-- Job Search Form -->
              <div class="job-search-form wow fadeInUp" data-wow-delay="600ms">
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

              <!-- Popular Search -->
              <div class="popular-searches wow fadeInUp" data-wow-delay="900ms">
                <span class="title">Popular Searches : </span>
                <a href="#">Designer</a>,
                <a href="#">Developer</a>,
                <a href="#">Web</a>,
                <a href="#">IOS</a>,
                <a href="#">PHP</a>,
                <a href="#">Senior</a>,
                <a href="#">Engineer</a>,
              </div>
              <!-- End Popular Search -->
            </div>
          </div>

          <div class="image-column col-xl-5 col-lg-4 col-md-12">
            <div class="image-box">
              <figure class="main-image wow fadeIn anm" data-wow-delay="1200ms" data-speed-x="2"><img src="images/index-11/header/image.png" alt=""></figure>
              <!-- Info BLock One -->
              <div class="info_block_first job-block wow fadeIn anm" data-wow-delay="1500ms" data-speed-x="3" data-speed-y="3">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/resource/company-logo/1-1.png" alt=""></span>
                    <h4><a href="#">Software Engineer</a></h4>
                    <ul class="job-info">
                      <li><span class="icon flaticon-briefcase"></span> Segment</li>
                      <li><span class="icon flaticon-map-locator"></span> Arusha </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="required">Urgent</li>
                      <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                  </div>
                </div>
              </div>

              <!-- Info BLock Three -->
              <div class="info_block_three wow fadeIn anm" data-wow-delay="2100ms" data-speed-x="3" data-speed-y="2">
                <span class="icon flaticon-briefcase"></span>
                <p>Creative Agency</p>
                <span class="sub-text">Startup</span>
                <span class="right_icon fa fa-check"></span>
              </div>

              <!-- Info BLock Four -->
              <div class="info_block_four wow fadeIn anm" data-wow-delay="2400ms" data-speed-x="2" data-speed-y="3">
                <span class="icon flaticon-file"></span>
                <div class="inner">
                  <p>Upload Your CV</p>
                  <span class="sub-text">It only takes a few seconds</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>