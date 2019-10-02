@extends('layouts.template')
@section('title')
Manage Slideshow
@endsection
@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="uk-heading-divider">
      Slideshow
    </div>
    <!-- add pages -->
    @if(session('success'))
    <div class="uk-alert-success" uk-alert>
      <a href="#" class="uk-alert-close" uk-close></a>
      <p>{{session('success')}}</p>
    </div>
    @endif
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="uk-alert-danger" uk-alert>
      <a href="#" class="uk-alert-close" uk-close></a>
      <p>{{$error}}</p>
    </div>
    @endforeach
    @endif
    <ul uk-accordion>
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">Add Slide</a>
            <div class="uk-accordion-content">
              {!!Form::open(['url'=>'admin/slideshow/add','id'=>'form_page','files'=>true])!!}
              {!!Form::text('titre','',['class'=>'uk-input uk-margin-small','placeholder'=>'titre'])!!}
              {!!Form::file('image')!!}
              <hr class="uk-divider-small">
              <div id="editor-content" style="height : 300px;"></div>
              <input type="hidden" name="contenu" value="" id="content">
              {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-border-rounded uk-margin-small'])!!}
              {!!Form::close()!!}
            </div>
        </li>
        <li>
          <a href="#" class="uk-accordion-title">List Slides</a>
          <div class="uk-accordion-content">

          </div>
        </li>
    </ul>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  $(function () {
    // ready to go
    var quill = $sitePage.makeEditor("#editor-content")

    $("#form_page").on('submit',function (e) {

      $("#content").val(quill.root.innerHTML)
    })
  })
</script>
@endsection
