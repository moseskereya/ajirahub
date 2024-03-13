@extends('layout')
@section('content')
@include('components.about-banner')
<!-- Pricing Sectioin -->
<section class="pricing-section">
    <div class="auto-container">
    <div class="sec-title text-center">
        <h2>Pricing Packages</h2>
        <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</div>
    </div>
    <!--Pricing Tabs-->
    <div class="pricing-tabs tabs-box">
        <!--Tab Btns-->
        <div class="tab-buttons">
        <h4>Save up to 10%</h4>
        <ul class="tab-btns">
            <li data-tab="#monthly" class="tab-btn active-btn">Monthly</li>
            <li data-tab="#annual" class="tab-btn">AnnualSave</li>
        </ul>
        </div>

        <!--Tabs Container-->
        <div class="tabs-content">

        <!--Tab / Active Tab-->
        <div class="tab active-tab" id="monthly">
            <div class="content">
            <div class="row">
                <!-- Pricing Table -->
                <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="title">Basic</div>
                    <div class="price">$199 <span class="duration">/ monthly</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                    </div>
                </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table tagged col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="tag">Recommended</span>
                    <div class="title">Standard</div>
                    <div class="price">$499 <span class="duration">/ monthly</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                    </div>
                </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="title">Extended</div>
                    <div class="price">$799 <span class="duration">/ monthly</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!--Tab-->
        <div class="tab" id="annual">
            <div class="content">
            <div class="row">
                <!-- Pricing Table -->
                <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="title">Basic</div>
                    <div class="price">$1199 <span class="duration">/ Annual</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                    </div>
                </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table tagged col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="tag">Recommended</span>
                    <div class="title">Standard</div>
                    <div class="price">$1499 <span class="duration">/ Annual</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                    </div>
                </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="title">Extended</div>
                    <div class="price">$1799 <span class="duration">/ Annual</span></div>
                    <div class="table-content">
                    <ul>
                        <li><span>1 job posting</span></li>
                        <li><span>0 featured job</span></li>
                        <li><span>Job displayed for 20 days</span></li>
                        <li><span>Premium Support 24/7 </span></li>
                    </ul>
                    </div>
                    <div class="table-footer">
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
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
<!-- End Pricing Section -->
@endsection