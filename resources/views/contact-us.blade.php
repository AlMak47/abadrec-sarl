@extends('layouts.template')

@section('title')
Contactez Nous
@endsection

@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="">Acceuil</a></li>
      <li><span>Contactez Nous</span></li>
  </ul>
    <!-- maps google -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d950.308393651502!2d-13.666638896003999!3d9.558112768372464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf1cd78b3cac365b%3A0xda9bac49724b0022!2sRond%auto20Point%20Belle%20Vue!5e1!3m2!1sfr!2s!4v1569346799623!5m2!1sfr!2s" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <!-- contact form -->
    <hr class="uk-divider-small">
    <p>
    Pour nous contacter , merci de remplir le formulaire ci dessous .</p>

    {!!Form::open(['url'=>''])!!}

    {!!Form::label('Nom Complet')!!}
    {!!Form::text('nom_complet','',['class'=>'uk-input uk-margin-small'])!!}

    {!!Form::label("Email")!!}
    {!!Form::text('email','',['class'=>'uk-input uk-margin-small'])!!}

    {!!Form::label('societe')!!}
    {!!Form::text('societe','',['class'=>'uk-input uk-margin-small'])!!}

    {!!Form::label('Message')!!}
    {!!Form::textarea('message','',['class'=>'uk-textarea uk-margin-small'])!!}
    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-border-rounded','disabled'=>'','style'=>'background :rgba(255,200,0,1)'])!!}
    {!!Form::close()!!}
  </div>
</div>
@endsection
