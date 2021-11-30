@extends('front.layouts.app')

@section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 text-center">
            <p class="breadcrumbs"><span class="me-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container-xl">
        <div class="wrapper">
          <div class="row g-0">
            
            <div class="col-lg-12">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3>Contact us</h3>
                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                <div class="row mb-4">
                  <div class="col-md-4">
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="text">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <form id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-lg-4"> 
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Create a message here"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="w-100 social-media mt-5">
                  <h3>Follow us here</h3>
                  <p>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">Dribbble</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    

@endsection
