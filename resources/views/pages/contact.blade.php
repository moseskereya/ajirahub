@extends('layout')
@section('content')   
        <!-- Map Section -->
        <section class="map-section">
          <div class="map-outer">
            <div class="map-canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1991.4488293931056!2d36.6964776!3d-3.3751857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371b626fff5181%3A0x92e3e257cf29e992!2sNSSF!5e0!3m2!1sen!2stz!4v1710085419724!5m2!1sen!2stz"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </section>
        <!-- End Map Section -->
    
        <!-- Contact Section -->
        <section class="contact-section">
          <div class="auto-container">
            <div class="upper-box">
              <div class="row">
                <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <span class="icon"><img src="images/icons/placeholder.svg" alt=""></span>
                    <h4>Address</h4>
                    <p>Nssf Mafao House, 7th floor<br>Anza Hub, Arusha Tanzania.</p>
                  </div>
                </div>
                <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <span class="icon"><img src="images/icons/smartphone.svg" alt=""></span>
                    <h4>Call Us</h4>
                    <p><a href="#" class="phone">+255684797667</a></p>
                  </div>
                </div>
                <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <span class="icon"><img src="images/icons/letter.svg" alt=""></span>
                    <h4>Email</h4>
                    <p><a href="#">contact@ajiraconnect.com</a></p>
                  </div>
                </div>
              </div>
            </div>
    
    
            <!-- Contact Form -->
            <div class="contact-form default-form">
              <h3>Leave A Message</h3>
              <!--Contact Form-->
              <form method="post" action="#" id="email-form">
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <div class="response"></div>
                  </div>
    
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Your Name</label>
                    <input type="text" name="username" class="username" placeholder="Your Name*" required>
                  </div>
    
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Your Email</label>
                    <input type="email" name="email" class="email" placeholder="Your Email*" required>
                  </div>
    
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="subject" placeholder="Subject *" required>
                  </div>
    
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Your Message</label>
                    <textarea name="message" placeholder="Write your message..." required=""></textarea>
                  </div>
    
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form">Send Massage</button>
                  </div>
                </div>
              </form>
            </div>
            <!--End Contact Form -->
          </div>
        </section>
        <!-- Contact Section -->
    
        <!-- Call To Action -->
        <section class="call-to-action style-two">
          <div class="auto-container">
            <div class="outer-box">
              <div class="content-column">
                <div class="sec-title">
                  <h2>Recruiting?</h2>
                  <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million<br> CVs in our database.</div>
                  <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start Recruiting Now</span></a>
                </div>
              </div>
    
              <div class="image-column" style="background-image: url(images/resource/image-1.png);">
                <figure class="image"><img src="images/resource/image-1.png" alt=""></figure>
              </div>
            </div>
          </div>
        </section>
        <!-- End Call To Action -->
@endsection