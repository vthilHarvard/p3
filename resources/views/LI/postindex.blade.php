@extends('layouts.master')

@section('title')
    Generate Lorem Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <!-- <link href="/css/books/show.css" type='text/css' rel='stylesheet'> -->
@stop

@section('sub-heading')
  Show Lorem Ipsum paragraphs
@stop

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
  <h3>Number of paragraphs requested: {{ $data['para'] }}</h3>
  @if(count($paragraphs) > 0)
      @foreach($paragraphs as $paragraph)
          <p>{{ $paragraph }}</p>
      @endforeach
  @else
      No paragraphs
  @endif

</div>
</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <!-- <script src="/js/books/show.js"></script> -->
@stop
