@extends('front.layouts.app')

@section('title', $orphelinat->name)

@section('meta_title', $orphelinat->name)
@section('meta_description', $orphelinat->data_identity['history'] ?? '')
@section('meta_url', route('public.orphanages.details', ['orphanage_slug' => $orphelinat->slug]))
@section('meta_image', $orphelinat->getFirstMediaUrl('images'))

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ $orphelinat->getFirstMediaUrl('images') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('public.home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="me-2"><a
                                href="{{ route('public.orphanages') }}">Orphelinats <i
                                    class="fa fa-chevron-right"></i></a></span> </p>
                    <h1 class="mb-0 bread">{{ $orphelinat->data_identity['name'] }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="infos-utiles p-5">
                            <ul>
                                <li>{{ $orphelinat->data_stats['children_number'] }} enfants</li>
                                <li>{{ $orphelinat->data_address['localisation'] ?? '' }} ({{ $orphelinat->city->name }})</li>
                                <li>{{ $orphelinat->data_identity_promoter['promoter_phone'] }} / {{$orphelinat->data_identity_promoter['second_phone'] ?? '' }}</li>
                                <li>
                                    <a href="{{ $orphelinat->data_identity['website'] }}" target="_blank">Site web
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="description mt-5">
                            {!! $orphelinat->data_identity['description'] ?? '' !!}
                        </div>
                        @if($orphelinat->data_identity['history'])
                            <div class="histoire mt-5">
                                <div class="title">
                                    <h1 style="color: #0313A0; text-transform: uppercase">Histoire de l'orphelinat</h1>
                                    <div class="mt-5 histoire-content">
                                        {!! $orphelinat->data_identity['history'] !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if( array_key_exists("withonoh", $orphelinat->data_identity))
                            @if($orphelinat->data_identity['withonoh'] != null)
                                <div class="withonoh mt-5">
                                    <div class="title">
                                        <h1 style="color: #0313A0; text-transform: uppercase">L'orphelinat et ONOH</h1>
                                        <div class="mt-5 withonoh-content">
                                            {!! $orphelinat->data_identity['withonoh'] !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-md-4">
                    <div class="sidebar-box">
                        <h3>Informations complémentaires</h3>
                        <ul class="categories me-md-4">
                            <li>
                                <strong>Nombre d'enfants : </strong>
                                <span>{{ $orphelinat->data_stats['children_number'] ?? 0 }}</span>
                            </li>

                            <li>
                                <strong>Email : </strong>
                                <span>{{ $orphelinat->data_identity['email'] ?? 'contact@onoh.org' }}</span>
                            </li>

                            <li>
                                <strong>Tel : </strong>
                                <span>{{ $orphelinat->data_identity['phone'] ?? '' }}</span>
                            </li>

                            <li>
                                <strong>Nom promoteur: </strong>
                                <span>{{ $orphelinat->data_identity_promoter['promoter_name'] ?? '' }}</span>
                            </li>

                            
                        </ul>
                    </div>
                    <div class="sidebar-box ">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="fund-wrap mt-0">
                                    <div class="fund-raised d-flex align-items-center">
                                        <div class="icon">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                        <div class="text section-counter-2">
                                            <h4 class="countup-">
                                                {{ number_format($orphelinat->dons->sum('amount')) }} FCFA</h4>
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
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Nom complet">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">Adresse email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="tel">N° de tel</label>
                                                     <input id="phone" type="tel" name="tel" class="form-control" placeholder="N° de Téléphone">
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

                                <!--Ici vient la modification actuelle concernant la boucle nature du don-->

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="amount">Nature du Don </label>
                                        
                                       <select class="form-select" name="" id="select-don"> 
                                           <option value="" id="Recepteur-option">Don vestimentaire</option>
                                           <option value="" id="Collecteur-option">Don alimentaire en nature</option>
                                           <option value="" id="Sponsoring-option">Parrainage d'enfant</option>
                                           <option value="" id="achat-option">Achat alimentaire en ligne</option>
                                           <option value="" id="financial-option">Don financier</option>

                                       
                                        </select>

                                        <script>
                                            $(document).ready(function () {
                                                

                                                $('#payment_mode3, #payment_mode1').on('change', function () {
                                                    console.log('@ornella')
                                                    if ($('#payment_mode3').prop('checked') == true) {
                                                        $('#payment_mode3-block').show()
                                                        $('#payment_mode1-block').hide()
                                                    }
                                                        
                                                    else {
                                                        $('#payment_mode3-block').hide()
                                                        $('#payment_mode1-block').show()
                                                    }
                                                   
                                                })
                                                $('#select-don').change(function() {
                                                    if ($('#financial-option').is(':selected')) {
                                                    $('#financial-block').show()
                                                }
                                         
                                                else {
                                                    $('#financial-block').hide()
                                                    $('#payment_mode3-block').hide()
                                                    $('#payment_mode1-block').hide()
                                                }
                                                if ($('#Recepteur-option').is(':selected')){
                                                    $('#Recepteur-block').show()
                                                }
                                                else {
                                                    $('#Recepteur-block').hide()
                                                }
                                                if ($('#Collecteur-option').is(':selected')){
                                                    $('#Recepteur-block').show()
                                                }
                                               
                                               if ($('#Sponsoring-option').is(':selected')){
                                                    $('#Sponsoring-block').show()
                                                }
                                                else {
                                                   $('#Sponsoring-block').hide()
                                                }
                                                if ($('#achat-option').is(':selected')){
                                                    $('#achat-block').show()
                                                }
                                                else {
                                                   $('#achat-block').hide()
                                                }
                                                })
                                            })
                                        </script>                                  
                                    </div>
                                </div>
                                <div id="financial-block" style="display: none">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="amount">Montant (en FCFA)</label>
                                            <input type="number" name="amount" class="form-control"
                                                placeholder="Montant à donner (en FCFA)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group d-flex" style="flex-wrap: wrap;">
                                            <div class="form-check d-flex" id="mode3_payment">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="paypal"
                                                id="payment_mode1">
                                           <label class="form-check-label" for="payment_mode1">Paypal / Carte bancaire</label>
                                                
                                        </div>

                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="payment_mode" value="momo"
                                                id="payment_mode3">
                                            <label class="form-check-label" for="payment_mode3">OM / MTN MoMo</label>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                            <div id="payment_mode3-block" style="display: none">
                                <div class="form-check d-flex ms-3">
                                    <div class="form-group">
                                        <p> adresse</p>
                                        <form>
                                            <ul>
                                                <li>Nom: One nation one heart</li>
                                                <li>Numero de telephone: +237 6 55 02 98 67</li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="payment_mode1-block" style="display: none">
                                <div class="gfm-embed" data-url="https://www.gofundme.com/f/descentes-2022/widget/large/"></div><script defer src="https://www.gofundme.com/static/js/embed.js"></script>
                            </div>

                            <div id="Recepteur-block" style="display: none">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p> Recepteur des dons en nature</p>
                                        <form>
                                            <ul>
                                                <li>Nom: One nation one heart</li>
                                                <li>Numero de telephone: +237 6 55 02 98 67</li>
                                            </ul>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div id="Sponsoring-block" style="display: none">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Veuillez joindre ce contact: +33 6 59 49 68 51</p>
                                    </div>
                                </div>
                            </div>
                            <div id="achat-block" style="display: none">
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <a href="https://market.lamater.net/?ref=onenation_oneheart" >effectuons l'achat</a>
                                    </div>
                                </div>
                            </div>                              
                                           {{-- <div class="col-md-12">
=======
                                            <div class="col-md-12">
>>>>>>> 13a4ad3aa37afd548d8fb26d581ba74f629e1ab2
                                                <div class="form-group">
                                                    <label for="amount">Montant (en FCFA)</label>
                                                    <input type="number" name="amount" class="form-control"
                                                        placeholder="Montant à donner (en FCFA)">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="form-group " style="">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio" name="payment_mode"
                                                            value="paypal" id="payment_mode1">
                                                        <label class="form-check-label" for="payment_mode1">Paypal</label>
                                                    </div>
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio" name="payment_mode"
                                                            value="card" id="payment_mode2">
                                                        <label class="form-check-label" for="payment_mode2">Carte
                                                            bancaire</label>
                                                    </div>
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio" name="payment_mode"
                                                            value="momo" id="payment_mode3">
                                                        <label class="form-check-label" for="payment_mode3">OM / MTN
                                                            MoMo</label>
                                                    </div>
                                                </div>
                                            </div>--}}
                                            <input type="hidden" name="orphanage_id" value="{{ $orphelinat->id }}" />
                                            <div class="col-md-12 mt-5">
                                                <input type="submit" value="Faire mon don"
                                                    class="btn btn-light py-3 px-4 rounded">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @if(count($other_orphanages) > 0)
            <div class="others mt-5 mb-5">
                <div class="title mb-5" style="text-align: center">
                    <h1 style="color: #0313A0; text-transform: uppercase">D'autre orphelinats de la zone</h1>
                </div>
                <div class="orphanages-cards">
                    @foreach($other_orphanages as $other)
                        @include("front.components.orphanage-card", ["orphanage" => $other])
                    @endforeach
                </div>i
            </div>
        @endif
        @if(str_starts_with($orphelinat->data_address['google_address'], '<iframe'))
            <div class="f-container">
                <div class="localisation-title mb-5" style="text-align: center">
                    <h1 style="color: #0313A0; text-transform: uppercase">Comment trouver {{ $orphelinat->data_identity['name'] }} ?</h1>
                </div>
                <div class="pt-5">
                    {!! $orphelinat->data_address['google_address'] ?? '' !!}
                </div>
            </div>
        @endif
    </section> <!-- .section -->
    <style>
        .f-container {
            width: 1440px;
            margin: auto;
        }

        iframe { width: 100%; height: 400px }

        .infos-utiles {
            background-color: #0313A0;
            color: #fff;
            font-weight: 700;
        }

        .infos-utiles a {
        }
    </style>
@endsection
