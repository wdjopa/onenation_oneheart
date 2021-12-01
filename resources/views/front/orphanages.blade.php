@extends('front.layouts.app')

@section('title', 'Orphélinats')
@section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image:  url('{{ asset('lovecare/images/bg_5.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('public.home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Orphelinats <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Orphélinats</h1>

                </div>

            </div>

        </div>
    </section>

    <section class="ftco-causes ftco-section ">
        <div class="container-xl">

            <div class="row">
                <div class="col-12">
                    <h5>Recherchez parmi les orphélinats</h5>
                    <div class="sidebar-box bg-light rounded">
                        <form action="{{ route('public.search') }}" method="GET" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                @if($orphelinats->count()> 0)
                @foreach ($orphelinats as $orphelinat)
                    @include("front.components.orphanage-card", ["orphanage" => $orphelinat])
                @endforeach
                @else
                <div class="d-flex" style="flex-direction: column; align-items: center;">
                <img src="{{asset("lovecare/images/empty.svg")}}" style="margin: 50px auto; width: 300px" />
                Pas d'orphelinats enregistré pour l'instant
                </div>
                @endif
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        {{ $orphelinats->links() }}
                        {{-- <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
