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
                                @if($orphelinat->data_identity['website'])
                                    <li>
                                        <a href="{{ (strpos($orphelinat->data_identity['website'], 'http') === 0) ? $orphelinat->data_identity['website'] : 'http://' . $orphelinat->data_identity['website'] }}" target="_blank">Site web
                                            <span>
                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            </span>
                                        </a>
                                    </li>
                                @endif
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
                        @if ($orphelinat->data_needs)
                            <div class="besoins mt-5">
                                <div class="title">
                                    <h1 style="color: #0313A0; text-transform: uppercase">Besoins de l'orphelinat</h1>
                                    <div class="ml-4" style="margin-left: 1.5rem">
                                        @if ($orphelinat->data_needs['food_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Besoins alimentaires</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['food_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
                                        @if ($orphelinat->data_needs['health_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Besoins sanitaires & hygiéniques</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['health_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
                                        @if ($orphelinat->data_needs['school_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Besoins scolaires</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['school_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
                                        @if ($orphelinat->data_needs['clothes_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Besoins vestimentaires</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['clothes_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
                                        @if ($orphelinat->data_needs['ludic_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Besoins ludiques</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['ludic_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
                                        @if ($orphelinat->data_needs['other_needs'])
                                            <div class="mt-5 food-needs-content">
                                                <h3 style="color: #0313A0; text-transform: uppercase">Autres besoins</h3>
                                                    <div class="mt-5 histoire-content">
                                                        {!! $orphelinat->data_needs['other_needs'] !!}
                                                    </div>
                                            </div>
                                        @endif
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
                        <div class="form-body">
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Promoteur
                                                <i class="bi bi-caret-down" style="padding: 2px"></i>
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container p-20">
                                                    <strong>Nom du promoteur : </strong>
                                                    <span>{{ $orphelinat->data_identity_promoter['promoter_name'] ?? '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Statistiques
                                                <i class="bi bi-caret-down" style="padding: 2px"></i>
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container p-20">
                                                    <ul class="categories me-md-4">
                                                        <li>
                                                            <strong>Nombres d'enfants dans la tranche 0-6ans : </strong>
                                                            <span>{{ $orphelinat->data_stats['children_number_0_6'] ?? 0 }}</span>
                                                        </li>

                                                        <li>
                                                            <strong>Nombres d'enfants dans la tranche 7-13ans : </strong>
                                                            <span>{{ $orphelinat->data_stats['children_number_7_13'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombres d'enfants dans la tranche 14-21ans : </strong>
                                                            <span>{{ $orphelinat->data_stats['children_number_14_21'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombre de garçons : </strong>
                                                            <span>{{ $orphelinat->data_stats['boys_number'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombre de filles : </strong>
                                                            <span>{{ $orphelinat->data_stats['girls_number'] ?? 0 }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Education
                                                <i class="bi bi-caret-down" style="padding: 2px"></i>
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container p-20">
                                                    <ul class="categories me-md-4">
                                                        <li>
                                                            <strong>Nombre d'enfants scolarisés : </strong>
                                                            <span>{{ $orphelinat->data_education['school_children_number'] ?? 0 }}</span>
                                                        </li>

                                                        <li>
                                                            <strong>Nombre d'enfants en classe d'examen : </strong>
                                                            <span>{{ $orphelinat->data_education['schoolexam_children_number'] ?? 0 }}</span>
                                                        </li>


                                                        <li>
                                                            <strong> nombre d'enfant en maternelle : </strong>
                                                            <span>{{ $orphelinat->data_education['maternelle_children_number'] ?? 0 }}</span>
                                                        </li>

                                                        <li>
                                                            <strong>Nombre d'enfants au primaire : </strong>
                                                            <span>{{ $orphelinat->data_education['primary_children_number'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombre d'enfants au collège : </strong>
                                                            <span>{{ $orphelinat->data_education['college_children_number'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombre d'enfants à l'université: </strong>
                                                            <span>{{ $orphelinat->data_education['university_children_number'] ?? 0 }}</span>
                                                        </li>
                                                        <li>
                                                            <strong>Nombre d'enfants en recherche de formation
                                                                professionnelle:
                                                            </strong>
                                                            <span>{{ $orphelinat->data_education['professional_children_number'] ?? 0 }}</span>
                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <input id="phone" type="tel" name="tel"
                                                        class="form-control" placeholder="N° de Téléphone">
                                                </div>
                                            </div>

                                            <!--Ici vient la modification actuelle concernant la boucle nature du don-->

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="amount">Nature du Don </label>

                                                    <select class="form-select" name="" id="select-don">
                                                        <option value="" id="Recepteur-option">Don vestimentaire
                                                        </option>
                                                        <option value="" id="Collecteur-option">Don alimentaire en
                                                            nature</option>
                                                        <option value="" id="Sponsoring-option">Parrainage d'enfant
                                                        </option>
                                                        <option value="" id="achat-option">Achat alimentaire en
                                                            ligne
                                                        </option>
                                                        <option value="" id="financial-option">Don financier
                                                        </option>


                                                    </select>

                                                    <script>
                                                        $(document).ready(function() {


                                                            $('#payment_mode3, #payment_mode1').on('change', function() {
                                                                console.log('@ornella')
                                                                if ($('#payment_mode3').prop('checked') == true) {
                                                                    $('#payment_mode3-block').show()
                                                                    $('#payment_mode1-block').hide()
                                                                } else {
                                                                    $('#payment_mode3-block').hide()
                                                                    $('#payment_mode1-block').show()
                                                                }

                                                            })
                                                            $('#select-don').change(function() {
                                                                if ($('#financial-option').is(':selected')) {
                                                                    $('#financial-block').show()
                                                                } else {
                                                                    $('#financial-block').hide()
                                                                    $('#payment_mode3-block').hide()
                                                                    $('#payment_mode1-block').hide()
                                                                }
                                                                if ($('#Recepteur-option').is(':selected')) {
                                                                    $('#Recepteur-block').show()
                                                                } else {
                                                                    $('#Recepteur-block').hide()
                                                                }
                                                                if ($('#Collecteur-option').is(':selected')) {
                                                                    $('#Recepteur-block').show()
                                                                }

                                                                if ($('#Sponsoring-option').is(':selected')) {
                                                                    $('#Sponsoring-block').show()
                                                                } else {
                                                                    $('#Sponsoring-block').hide()
                                                                }
                                                                if ($('#achat-option').is(':selected')) {
                                                                    $('#achat-block').show()
                                                                } else {
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
                                                            <input class="form-check-input" type="radio"
                                                                name="payment_mode" value="paypal" id="payment_mode1">
                                                            <label class="form-check-label" for="payment_mode1">Paypal /
                                                                Carte
                                                                bancaire</label>

                                                        </div>

                                                        <div class="form-check d-flex ms-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="payment_mode" value="momo" id="payment_mode3">
                                                            <label class="form-check-label" for="payment_mode3">OM / MTN
                                                                MoMo</label>
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
                                                <div class="gfm-embed"
                                                    data-url="https://www.gofundme.com/f/descentes-2022/widget/large/">
                                                </div>
                                                <script defer src="https://www.gofundme.com/static/js/embed.js"></script>
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
                                                        <a href="https://market.lamater.net/?ref=onenation_oneheart&orphanage={{$orphelinat->slug}}" target="_blank">effectuons
                                                            l'achat</a>
                                                    </div>
                                                </div>
                                            </div>
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
{{--            <div class="others mt-5 mb-5">--}}
{{--                <div class="title mb-5" style="text-align: center">--}}
{{--                    <h1 style="color: #0313A0; text-transform: uppercase">D'autres orphelinats de la ville de {{ $orphelinat->city->name }}</h1>--}}
{{--                </div>--}}
{{--                <div class="ftco-causes ftco-section">--}}
{{--                    <div class="container-xl">--}}
{{--                        <div class="row">--}}
{{--                            <div class="orphanages-cards">--}}
{{--                                @foreach($other_orphanages as $other)--}}
{{--                                    @include("front.components.orphanage-card", ["orphanage" => $other])--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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
            width: 100%;
            margin: auto;
        }

        iframe { width: 100%; height: 400px }

        .infos-utiles {
            background-color: #0313A0;
            color: #fff;
            font-weight: 700;
        }
        button:hover, button:focus { color: unset }

        .ftco-causes {
            width: unset;
            margin: auto;
        }

        .causes-wrap {
            margin-right: 5px;
        }

        .ftco-causes .causes-wrap .img { width: 372px }
    </style>
@endsection
