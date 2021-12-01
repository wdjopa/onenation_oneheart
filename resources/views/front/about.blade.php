@extends('front.layouts.app')

@section('content')
    

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 text-center">
            <p class="breadcrumbs"><span class="me-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-xl">
        <div class="row g-lg-5">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="img img-2 w-100" style="background-image: url(images/about.jpg);">
            </div>
          </div>
          <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="mt-0 my-lg-5 py-5">
              <span class="subheading">Welcome to LoveCare Non-Profit Charity</span>
              <h2 class="mb-4">Do You Care Our Children?</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-secondary py-3 px-4">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-counter mt-0 img" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 heading-section heading-section-white mb-5" data-aos="fade-up" data-aos-duration="1000">
            <span class="subheading">Great Reviews for our services</span>
            <h2 class="mb-0">Technical Statistics</h2>
          </div>
        </div>
        <div class="row section-counter">
          <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
              <div class="icon">
                <span class="flaticon-heart"></span>
              </div>
              <h2 class="number"><small>$</small><span class="countup">60</span><small>M</small></h2>
              <span class="caption">Fund Raised</span>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
              <div class="icon">
                <span class="flaticon-ecosystem"></span>
              </div>
              <h2 class="number"><span class="countup">9200</span></h2>
              <span class="caption">Completed Projects </span>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
              <div class="icon">
                <span class="flaticon-donation"></span>
              </div>
              <h2 class="number"><span class="countup">5800</span></h2>
              <span class="caption">Donation</span>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
              <div class="icon">
                <span class="flaticon-charity"></span>
              </div>
              <h2 class="number"><span class="countup">2750</span></h2>
              <span class="caption">Volunteer</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row justify-content-center pb-4">
          <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
            <span class="subheading">Meet Our Volunteer</span>
            <h2 class="mb-5">Our Volunteer</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($users as $user)
            @include("front.components.volunteer-item", ["volunteer" => $user])
            @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
      <div class="overlay"></div>
      <div class="container-xl">
        <div class="row justify-content-center pb-4">
          <div class="col-lg-7 text-center heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-5">What People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="carousel-testimony">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="ps-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="ps-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                      <div class="ps-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                      <div class="ps-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="ps-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
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

    
@endsection