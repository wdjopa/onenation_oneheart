 @if($orphanage->status == 1)
<div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="causes-wrap">
        <a href="{{route("public.orphanages.details", ["orphanage_slug" => $orphanage->slug])}}" class="img d-flex align-items-end justify-content-center glightbox-"
            style="background-image: url({{$orphanage->getFirstMediaUrl("images")}});">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
            <span class="sub">{{$orphanage->city->name}}, {{$orphanage->city->country_name}} </span>
        </a>
        <div class="text">
            <div class="desc">
                <a href="{{route("public.orphanages.details", ["orphanage_slug" => $orphanage->slug])}}">
                <h2 class="mb-3">{{$orphanage->name}}</h2>
                </a>
                <p>{{substr($orphanage->data_identity['mini_description'] ?? "", 0, 100) . "..."}}
                </p>
            </div>
            <div class="progress-desc">
                <div class="d-flex raised-goal justify-content-between">
                    <span>Dons collectés: <strong>{{$orphanage->dons->sum("amount")}} FCFA</strong></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
