@extends('layouts.template')
@section('title')
Edit Page
@endsection
@section('content')
<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="uk-heading-divider">
      Edit
    </div>
    @if($editable)
    {!!Form::open(['url'=>'admin/pages/edit/'.$editable->slug,'id'=>'form_page'])!!}
    <input type="hidden" name="slug" value="{{$editable->slug}}">
    {!!Form::text('titre',$editable->titre,['class'=>'uk-input uk-margin-small','placeholder'=>'titre'])!!}
    {!!Form::select('tag',[
    'presentation'  =>  'Presentation',
    'service' =>  'Service'
    ],$editable->tag,['class'=>'uk-select uk-margin-small'])!!}
    <div id="editor-content" style="height : 300px;">{!!$editable->content!!}</div>
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
