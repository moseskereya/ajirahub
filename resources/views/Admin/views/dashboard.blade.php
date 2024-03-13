@extends('layout')
@section('content')
    <!-- Sidebar Backdrop -->
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
            <h3>Howdy, {{auth()->user()->name}}!</h3>
            <div class="text">Ready to jump back in?</div>
          </div>
          <div class="row">
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="ui-item">
                <div class="left">
                  <i class="icon flaticon-briefcase"></i>
                </div>
                <div class="right">
                  <h4>22</h4>
                  <p>Posted Jobs</p>
                </div>
              </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="ui-item ui-red">
                <div class="left">
                  <i class="icon la la-file-invoice"></i>
                </div>
                <div class="right">
                  <h4>9382</h4>
                  <p>Application</p>
                </div>
              </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="ui-item ui-yellow">
                <div class="left">
                  <i class="icon la la-comment-o"></i>
                </div>
                <div class="right">
                  <h4>74</h4>
                  <p>Messages</p>
                </div>
              </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="ui-item ui-green">
                <div class="left">
                  <i class="icon la la-bookmark-o"></i>
                </div>
                <div class="right">
                  <h4>32</h4>
                  <p>Shortlist</p>
                </div>
              </div>
            </div>
          </div>
  
          <div class="row">
  
  
            <div class="col-xl-7 col-lg-12">
              <!-- Graph widget -->
              <div class="graph-widget ls-widget">
                <div class="tabs-box">
                  <div class="widget-title">
                    <h4>Your Profile Views</h4>
                    <div class="chosen-outer">
                      <!--Tabs Box-->
                      <select class="chosen-select" style="display: none;">
                        <option>Last 6 Months</option>
                        <option>Last 12 Months</option>
                        <option>Last 16 Months</option>
                        <option>Last 24 Months</option>
                        <option>Last 5 year</option>
                    </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 100%;"><a class="chosen-single">
                  <span>Last 6 Months</span>
                <div><b></b></div>
                </a>
                <div class="chosen-drop">
                  <div class="chosen-search">
                    <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                  </div>
                  <ul class="chosen-results"></ul>
                </div></div>
                    </div>
                  </div>
                  <div class="widget-content">
                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                      <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        </div>
                      </div>
                      <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0">
                      </div>
                     </div>
                    </div>
                    <canvas id="chart" width="549" height="247" style="display: block; height: 309px; width: 687px;" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-5 col-lg-12">
              <!-- Notification Widget -->
              <div class="notification-widget ls-widget">
                <div class="widget-title">
                  <h4>Notifications</h4>
                </div>
                <div class="widget-content">
                  <ul class="notification-list">
                    <li><span class="icon flaticon-briefcase"></span> <strong>Wade Warren</strong> applied for a job <span class="colored">Web Developer</span></li>
                    <li><span class="icon flaticon-briefcase"></span> <strong>Henry Wilson</strong> applied for a job <span class="colored">Senior Product Designer</span></li>
                    <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Raul Costa</strong> applied for a job <span class="colored">Product Manager, Risk</span></li>
                    <li><span class="icon flaticon-briefcase"></span> <strong>Jack Milk</strong> applied for a job <span class="colored">Technical Architect</span></li>
                    <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Michel Arian</strong> applied for a job <span class="colored">Software Engineer</span></li>
                    <li><span class="icon flaticon-briefcase"></span> <strong>Ali Tufan</strong> applied for a job <span class="colored">UI Designer</span></li>
                  </ul>
                </div>
              </div>
            </div>
  
  
            <div class="col-lg-12">
              <!-- applicants Widget -->
              <div class="applicants-widget ls-widget">
                <div class="widget-title">
                  <h4>Recent Applicants</h4>
                </div>
                <div class="widget-content">
                  <div class="row">
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-1.png" alt=""></figure>
                          <h4 class="name"><a href="#">Darlene Robertson</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-2.png" alt=""></figure>
                          <h4 class="name"><a href="#">Wade Warren</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-3.png" alt=""></figure>
                          <h4 class="name"><a href="#">Leslie Alexander</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-1.png" alt=""></figure>
                          <h4 class="name"><a href="#">Darlene Robertson</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-2.png" alt=""></figure>
                          <h4 class="name"><a href="#">Wade Warren</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Candidate block three -->
                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <figure class="image"><img src="images/resource/candidate-3.png" alt=""></figure>
                          <h4 class="name"><a href="#">Leslie Alexander</a></h4>
                          <ul class="candidate-info">
                            <li class="designation">UI Designer</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                          </ul>
                          <ul class="post-tags">
                            <li><a href="#">App</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital</a></li>
                          </ul>
                        </div>
                        <div class="option-box">
                          <ul class="option-list">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                            <li><button data-text="Approve Aplication"><span class="la la-check"></span></button></li>
                            <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span></button></li>
                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
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


  <script src="js/chart.min.js"></script>
  <script>
    Chart.defaults.global.defaultFontFamily = "Sofia Pro";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {

      type: 'line',
      // The data for our dataset
      data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        // Information about the dataset
        datasets: [{
          label: "Views",
          backgroundColor: 'transparent',
          borderColor: '#1967D2',
          borderWidth: "1",
          data: [196, 132, 215, 362, 210, 252],
          pointRadius: 3,
          pointHoverRadius: 3,
          pointHitRadius: 10,
          pointBackgroundColor: "#1967D2",
          pointHoverBackgroundColor: "#1967D2",
          pointBorderWidth: "2",
        }]
      },

      // Configuration options
      options: {

        layout: {
          padding: 10,
        },

        legend: {
          display: false
        },
        title: {
          display: false
        },

        scales: {
          yAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              borderDash: [6, 10],
              color: "#d8d8d8",
              lineWidth: 1,
            },
          }],
          xAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              display: false
            },
          }],
        },

        tooltips: {
          backgroundColor: '#333',
          titleFontSize: 13,
          titleFontColor: '#fff',
          bodyFontColor: '#fff',
          bodyFontSize: 13,
          displayColors: false,
          xPadding: 10,
          yPadding: 10,
          intersect: false
        }
      },
    });
  </script>
@endsection