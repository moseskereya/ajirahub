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
          <h3>Manage Jobs</h3>
          <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Job Listings</h4>
                  <div class="chosen-outer">
                    <!--Tabs Box-->
                    <select class="chosen-select" style="display: none;">
                      <option>Last 6 Months</option>
                      <option>Last 12 Months</option>
                      <option>Last 16 Months</option>
                      <option>Last 24 Months</option>
                      <option>Last 5 year</option>
                    </select>
                  </div>
                </div>
                <div class="widget-content">
                  <div class="table-outer">
                    <table class="default-table manage-job-table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Applications</th>
                          <th>Created &amp; Expired</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    @forelse ($jobs as $job)
                     <tbody>
                       <tr>
                         <td>
                          <h6>{{$job->title}}</h6>
                          <span class="info"><i class="icon flaticon-map-locator"></i> {{$job->city->name}}</span>
                        </td>
                        <td class="applied">
                          @if ($job->applications->count() > 0)
                              <a href="/applicants">{{$job->applications->count()}} Applied</a>
                          @else
                              No applicants yet
                          @endif
                      </td>
                        <td>{{$job->created_at}} <br>{{$job->expiration_date}}</td>
                        <td class="status">Active</td>
                        <td>
                          <div class="option-box">
                            <ul class="option-list">
                              <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                             <li>
                                 <a href="/jobedit/{{$job->id}}" data-text="Edit Job">
                                     <span class="la la-pencil"></span>
                                 </a>
                             </li>
                              <form method="delette" action="/jobdelete">
                              @csrf
                               <li>
                                <button data-text="Delete Aplication"><span class="la la-trash"></span>
                              </button>
                              </li>
                              </form>
                            </ul>
                           </div>
                         </td>
                       </tr>
                    </tbody>
                      @empty
                        <p>You dont have jobs yet</p>
                      @endforelse
                    </table>
                    {{$jobs->links()}}
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
      <p>© 2024 Superio. All Right Reserved.</p>
    </div>

  </div>
@endsection