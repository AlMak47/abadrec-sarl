@extends('layouts.template')

@section('title')
A Propos de Nous
@endsection

@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">

    <ul class="uk-breadcrumb">
      <li><a href="">Acceuil</a></li>
      <li><span>A Propos</span></li>
  </ul>
  <!-- qui sommes nous -->
  @if($whoWeAre)
  <div class="uk-h3 uk-heading-divider">
    {{$whoWeAre->titre}}
  </div>
  <p>{!!$whoWeAre->content!!}</p>
  @endif
  </div>
</div>
@endsection
