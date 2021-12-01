@extends('front.layouts.app')

@section('content')

    <section class="hero-wrap rellax" data-rellax-speed="-5" data-rellax-min="-120" data-rellax-max="0"
        style="background-image: url('{{ asset('lovecare/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-6">
                    <span class="subheading">Raising Hope</span>
                    <h1 class="mb-4">To the Homeless &amp; Hopeless People</h1>
                    <p><a href="#donate" class="btn btn-primary p-4 py-3">Faire un don maintenant <span
                                class="ion-ios-arrow-round-forward"></span></a>
                        {{-- <a href="#" class="btn">Watch the
                            Video <span class="ion-ios-play"></span></a> --}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro-wrap" id="donate">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-md-5 order-lg-last d-flex align-items-stretch">
                    <div class="fund-wrap">
                        <div class="fund-raised d-flex align-items-center">
                            <div class="icon">
                                <span class="flaticon-heart"></span>
                            </div>
                            <div class="text section-counter-2">
                                <h4 class="countup">0 FCFA</h4>
                                <span>Dons récoltés</span>
                            </div>
                        </div>
                        <form action="#" class="appointment">
                            <span class="subheading">Donate Now</span>
                            <h2 class="mb-4 appointment-head">Giving is the greatest act of grace</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Your Full Name</label>
                                        <input type="text" class="form-control" placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject">Select Causes</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Food</option>
                                                    <option value="">Medical Health</option>
                                                    <option value="">Education</option>
                                                    <option value="">Environment</option>
                                                    <option value="">Shelter/Home</option>
                                                    <option value="">Clothes</option>
                                                    <option value="">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="amount">Amount to Give</label>
                                        <input type="text" class="form-control" placeholder="Amount">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-flex">
                                        <div class="form-check d-flex">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">Paypal</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">Credit Card</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">OM/MoMo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Donate Now" class="btn btn-light py-3 px-4 rounded">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 about-wrap">
                        <span class="subheading">Welcome to Lovecare Charity</span>
                        <h2 class="mb-4">We Help Thousands of Children to Get Their Education</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                            is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="row mt-5 g-md-3">
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2">
                                    <div class="icon"><span class="flaticon-donation"></span></div>
                                    <div class="text">
                                        <h2>Start Donating</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-2">
                                    <div class="icon"><span class="flaticon-ecosystem"></span></div>
                                    <div class="text">
                                        <h2>Join Our Community</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-3">
                                    <div class="icon"><span class="flaticon-charity"></span></div>
                                    <div class="text">
                                        <h2>Be A Volunteer</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-counter img" style="background-image: url({{ asset('lovecare/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-section heading-section-white mb-5" data-aos="fade-up"
                    data-aos-duration="1000">
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
                        <h2 class="number"><small>$</small><span class="countup">60</span><small>M</small>
                        </h2>
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

    <section class="ftco-causes ftco-section ">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Causes</span>
                    <h2 class="mb-4">Our Causes &amp; Help Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-causes">
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="{{ asset('lovecare/images/cause-1') }}.jpg"
                                    class="img d-flex align-items-end justify-content-center glightbox"
                                    style="background-image: url({{ asset('lovecare/images/cause-1') }}.jpg);">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="{{ asset('lovecare/images/cause-1') }}.jpg"
                                    class="img d-flex align-items-end justify-content-center glightbox"
                                    style="background-image: url({{ asset('lovecare/images/cause-2') }}.jpg);">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="{{ asset('lovecare/images/cause-1') }}.jpg"
                                    class="img d-flex align-items-end justify-content-center glightbox"
                                    style="background-image: url({{ asset('lovecare/images/cause-3') }}.jpg);">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="{{ asset('lovecare/images/cause-1') }}.jpg"
                                    class="img d-flex align-items-end justify-content-center glightbox"
                                    style="background-image: url({{ asset('lovecare/images/cause-4') }}.jpg);">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
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

    <section class="ftco-image img" style="background-image: url({{ asset('lovecare/images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 heading-section heading-section-white mb-5 text-center" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Lovecare Charity</span>
                    <h2 class="mb-4">The Smallest Act of Kindness is Worth More Than the Grandest Intention</h2>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Donate Now!</a> <a href="#"
                            class="btn btn-secondary py-3 px-4">Become A Volunteer</a></p>
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
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('lovecare/images/staff-1') }}.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('lovecare/images/staff-2') }}.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Anne Hayes</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('lovecare/images/staff-3') }}.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Martha Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('lovecare/images/staff-4') }}.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Mike Tyson</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img"
        style="background-image: url({{ asset('lovecare/images/bg_4.jpg') }});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section heading-section-white" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">What People Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('lovecare/images/person_1.jpg') }})">
                                        </div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('lovecare/images/person_2.jpg') }})">
                                        </div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('lovecare/images/person_3.jpg') }})">
                                        </div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('lovecare/images/person_4.jpg') }})">
                                        </div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('lovecare/images/person_2.jpg') }})">
                                        </div>
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

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img img-2 w-100"
                        style="background-image: url({{ asset('lovecare/images/about.jpg') }});">
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">Welcome to LoveCare Non-Profit Charity</span>
                        <h2 class="mb-4">Do You Care Our Children?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                            is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p><a href="#" class="btn btn-secondary py-3 px-4">Be A Volunteer</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent From Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('{{ asset('lovecare/images/image_1.jpg') }}');">
                        </a>
                        <div class="text text-center">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                ocean.</p>
                            <p><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward me-2"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('{{ asset('lovecare/images/image_2.jpg') }}');">
                        </a>
                        <div class="text text-center">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                ocean.</p>
                            <p><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward me-2"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('{{ asset('lovecare/images/image_3.jpg') }}');">
                        </a>
                        <div class="text text-center">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                ocean.</p>
                            <p><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward me-2"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
