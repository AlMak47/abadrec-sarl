@extends('layouts.template')

@section('title')
Abadrec Ingenierie Sarl
@endsection

@section('content')
<!-- banniere -->
<div class="uk-position-relative uk-visible-toggle uk-margin-remove" uk-slideshow="autoplay:true;animation: push ; max-height : 500;autoplay-interval : 3000;pause-on-hover:false">
    <ul class="uk-slideshow-items">
      @if($slideShow)
      @foreach($slideShow as $slide)
        <li>
            <img src="{{asset('slideshow/'.$slide->image)}}" alt="" uk-cover>
            <div class="uk-position-bottom-right uk-transition-slide-bottom uk-overlay uk-overlay-default uk-position-small uk-text-center uk-dark">
                <h2 class="uk-margin-remove">{{$slide->titre}}</h2>
                <p class="uk-margin-remove">{!!$slide->contenu!!}</p>
            </div>
        </li>
        @endforeach
        @endif
      </ul>
      <a class="uk-position-center-left uk-light uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
<!-- // -->
<!-- qui sommes nous -->
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="uk-h3">
      Qui Sommes Nous
    </div>
    <p class="uk-margin">
      {!!Illuminate\Support\Str::limit($whoWeAre->content,500,'...')!!}
    </p>
    <a href="{{url('about-us')}}" class="uk-button uk-button-default uk-border-rounded uk-width-1-1@s uk-width-1-5@m" style="background :rgba(255,200,0,1)">En savoir plus</a>
  </div>
</div>
<!-- Nos services -->
<div id="service-target" class="uk-section uk-section-default">
  <div class="uk-container">
  <div  class="uk-h3 uk-divider-small uk-margin-bottom">
    Expertises
  </div>
</div>
  <div class="uk-container uk-container-large">

    <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@l uk-text-center" uk-grid="parallax: 10">
      <div uk-scrollspy="cls: uk-animation-slide-left;">
        <div class="uk-card uk-border-rounded">
          <div class="uk-card-media-top">
              <img src="{{asset('image/etudes-conseils.jpg')}}" style="height : 200px" alt="">
          </div>
          <div class="uk-card-body">
            <h4 class="">Etudes & Conseils</h4>
          </div>
        </div>
      </div>

      <div uk-scrollspy="cls: uk-animation-slide-bottom;">
        <div class="uk-card  uk-border-rounded">
          <div class="uk-card-media-top">
              <img src="{{asset('image/fournitures-electriques.jpg')}}" style="height:200px" alt="">
          </div>
          <div class="uk-card-body">
            <h4 class="">Fournitures Electriques</h4>
          </div>
        </div>
      </div>

      <div uk-scrollspy="cls: uk-animation-slide-top;">
        <div class="uk-card uk-border-rounded">
          <div class="uk-card-media-top">
              <img src="{{asset('image/realisations.jpg')}}" style="height : 200px ;" alt="">
          </div>
          <div class="uk-card-body">
            <h4 class="">Realisations</h4>
          </div>
        </div>
      </div>

      <div uk-scrollspy="cls: uk-animation-slide-right;">
        <div class="uk-card  uk-border-rounded">
          <div class="uk-card-media-top">
              <img src="{{asset('image/formation.jpeg')}}" style="height : 200px;" alt="">
          </div>
          <div class="uk-card-body">
            <h4 class="">Formations</h6>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- contatez nous (parallaxe) -->
<div class="uk-height-large uk-background-cover  uk-overflow-default uk-light uk-flex uk-flex-top" style="background-image: url('image/contact-us.jpg');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical uk-overlay uk-overlay-primary">
        <h1 uk-parallax="opacity: 1,1; y: 100,0; scale: 2,1; viewport: 0.5;">Vous avez un Projet ?</h1>
        <p class="uk-text-lead" uk-parallax="opacity: 1,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">
          Faites appel a notre entreprise , nos Equipes d'ingenieurs sauront vous apporter les solutions necessaires!
        </p>
        <a href="{{url('/contact-us')}}" class="uk-button uk-button-default uk-border-rounded uk-width-1-1@s uk-width-1-2@m" style="background :rgba(255,200,0,1);color : #000;">Contactez Nous</a>
    </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
  $(function () {


  })
  </script>
@endsection
