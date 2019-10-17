@extends('layouts.template')
@section('title')
Edit slide
@endsection
@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="uk-heading-divider">
      Edit
    </div>
    @if(session('success'))
    <div class="uk-alert-success" uk-alert>
      <p>{{session('success')}}</p>
    </div>
    @endif
    @if($editable)
    {!!Form::open(['url'=>'admin/slideshow/edit/'.$editable->slug,'id'=>'form_page','files'=>true])!!}
    <input type="hidden" name="slug" value="{{$editable->slug}}">
    {!!Form::text('titre',$editable->titre,['class'=>'uk-input uk-margin-small','placeholder'=>'titre'])!!}
    <div class=" uk-margin-small">
      <img src="{!!asset('slideshow/'.$editable->image)!!}" class="uk-width-1-3@m uk-border-rounded" alt="">
    </div>
    <div class="uk-margin-small">
      <label for="">Modifier l'image</label>
    <input type="file" name="image"/>
  </div>
    <div id="editor-content" style="height : 300px;">{!!$editable->contenu!!}</div>
    <input type="hidden" name="contenu" value="" id="content">
    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-border-rounded uk-margin-small'])!!}
    {!!Form::close()!!}
    @endif
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
