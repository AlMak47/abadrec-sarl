@extends('layouts.template')
@section('title')
Settings
@endsection
@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="uk-heading-divider">
      Changer le Mot de passe
    </div>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="uk-alert-danger" uk-alert>
      <a href="#" class="uk-alert-close" uk-close></a>
      <p>{{$error}}</p>
    </div>
    @endforeach
    @endif
    {!!Form::open(['url'=>'/admin/change-password'])!!}
    {!!Form::label('Ancien Mot de passe')!!}
    {!!Form::text("old_password",'',['class'=>'uk-input uk-margin-small'])!!}
    {!!Form::label("Nouveau Mot de passe")!!}
    {!!Form::password('new_password',['class'=>'uk-input uk-margin-small'])!!}
    {!!Form::label('Confirmez le Nouveau Mot de passe')!!}
    {!!Form::password('new_password_confirmation',['class'=>'uk-input uk-margin-small'])!!}
    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-border-rounded'])!!}
    {!!Form::close()!!}
  </div>
</div>
@endsection
