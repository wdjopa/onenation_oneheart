@extends('front.layouts.app')

@section('content')

    <section class="hero-wrap rellax" data-rellax-speed="-5" data-rellax-min="-120" data-rellax-max="0"
        style="background-image: url('{{ asset('lovecare/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-6">
                    <span class="subheading">One Nation One Heart</span>
                    <h1 class="mb-4">Smile Together</h1>
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
                                <h4 class="countup">{{ number_format($total_donations) }} FCFA</h4>
                                <span>Dons récoltés</span>
                            </div>
                        </div>
                        <form action="{{ route('public.donation') }}" method="POST" class="appointment">
                            @csrf
                            <span class="subheading">Faire un don</span>
                            <h2 class="mb-4 appointment-head">Donner est le plus grand acte de grace</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nom complet</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nom complet">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Adresse email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tel">N° de tel</label>
                                        <input type="tel" name="tel" class="form-control" placeholder="N° de Téléphone">
                                    </div>
                                </div>
                                {{-- <div class="col-md-12 d-none">
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
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="amount">Montant (en FCFA)</label>
                                        <input type="number" name="amount" class="form-control"
                                            placeholder="Montant à donner (en FCFA)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-flex">
                                        <div class="form-check d-flex">
                                            <input class="form-check-input" type="radio" name="payment_mode" value="paypal"
                                                id="payment_mode1">
                                            <label class="form-check-label" for="payment_mode1">Paypal</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="payment_mode" value="card"
                                                id="payment_mode2">
                                            <label class="form-check-label" for="payment_mode2">Carte bancaire</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="payment_mode" value="momo"
                                                id="payment_mode3">
                                            <label class="form-check-label" for="payment_mode3">OM / MTN MoMo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Faire mon don" class="btn btn-light py-3 px-4 rounded">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 about-wrap">
                        <span class="subheading">Bienvenue chez One Nation, One Heart</span>
                        <h2 class="mb-4">Pour une action sociale, humanitaire et solidaire,</h2>
                        <p>Sur cette plateforme, nous recensons tous les orphelinats et centres sociaux légaux sur
                            toute l’étendue du territoire national Camerounais (répartis par Région, Départements, Villes et
                            quartiers), le nombre d’enfants en charge dans chaque structure, la tranche d’âge d’enfants
                            présents dans ces orphelinats, la liste de leurs besoins (financiers, sanitaires, denrées
                            alimentaires, vestimentaires, etc…), leur histoire et les contacts des responsables de ces
                            diverses structures.
                        </p>
                        <p>
                            L'idée étant de casser les codes préétablis et préjugés de l’action sociale au Cameroun et
                            rendre chacun acteur du bonheur d’autrui.</p>

                        <div class="row mt-5 g-md-3">
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2">
                                    <div class="icon"><span class="flaticon-donation"></span></div>
                                    <div class="text">
                                        <h2>Ajouter un orphélinat</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-2">
                                    <div class="icon"><span class="flaticon-ecosystem"></span></div>
                                    <div class="text">
                                        <h2>Devenir partenaire</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-3">
                                    <div class="icon"><span class="flaticon-charity"></span></div>
                                    <div class="text">
                                        <h2>Devenir bénévole</h2>
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
                    <span class="subheading">Quelques chiffres de ONOH</span>
                    <h2 class="mb-0">Chiffres clés</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-heart"></span>
                        </div>
                        <h2 class="number"><span class="countup">5</span>
                        </h2>
                        <span class="caption">Orphelinats prospectés</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-ecosystem"></span>
                        </div>
                        <h2 class="number"><span class="countup">3</span></h2>
                        <span class="caption">Partenaires </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-donation"></span>
                        </div>
                        <h2 class="number"><span class="countup">239</span></h2>
                        <span class="caption">enfants recensés</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-charity"></span>
                        </div>
                        <h2 class="number"><span class="countup">33</span></h2>
                        <span class="caption">bénévoles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-causes ftco-section ">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Nos actions menées grâce à vous </span>
                    <h2 class="mb-4">Actions menées</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">


                    @if ($blogs->count() > 0)
                        <div class="carousel-causes">
                            @foreach ($blogs as $blog)
                                @include("front.components.blog-card", ["blog" => $blog])
                            @endforeach
                        </div>
                    @else
                        <div class="d-flex"
                            style="flex-direction: column; align-items: center; justify-content:center; margin: auto;">
                            <img src="{{ asset('lovecare/images/empty.svg') }}" style="margin: 50px auto; width: 300px" />
                            Pas d'articles enregistré pour l'instant
                        </div>
                    @endif

                    {{-- <div class="item">
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
                        </div> --}}
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
                    <span class="subheading">Faites un don ou devenez volontaires</span>
                    <h2 class="mb-4">Le plus petit acte de bonté vaut plus que la plus grande intention</h2>
                    <p><a href="#donate" class="btn btn-primary py-3 px-4">Faire un don maintenant !</a> <a href="#"
                            class="btn btn-secondary py-3 px-4">Devenir bénévole</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Partenaires</span>
                    <h2>Découvrez nos partenaires</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                {{-- La Mater Market --}}
                @foreach ($partners as $partner)
                    @include("front.components.partner-card", ["partner" =>($partner)])
                @endforeach
            </div>
        </div>
    </section>
    {{-- <section class="ftco-section">
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
    </section> --}}

    <section class="ftco-section testimony-section img"
        style="background-image: url({{ asset('lovecare/images/bg_4.jpg') }});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section heading-section-white" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Témoignages</span>
                    <h2 class="mb-5">Ce qu'ils disent de nous</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">

                        @foreach ($testimonies as $testimony)
                            @include("front.components.testimony-item", ["testimony" => $testimony])
                        @endforeach

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
                        <span class="subheading">Apportez un soutien humain à l'aventure ONOH</span>
                        <h2 class="mb-4">Appel à bénévoles</h2>
                        <p>Couvrir l’étendue du territoire afin d’avoir une proximité avec la quasi-totalité des orphelinats
                            et centres sociaux. Faciliter les descentes et faire connaître l’association.
                        </p>
                        <p>N'hésitez pas à nous rejoindre et mettre votre pièrre à l'édifice.
                        </p>
                        <p><a href="#" class="btn btn-secondary py-3 px-4">Devenir bénévole</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
