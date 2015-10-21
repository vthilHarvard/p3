@extends('layouts.master')


@section('title')
    Show paragraphs
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
<div class="col-md-4 col-md-offset-4">
  <form class="form-horizontal" method="POST" action="/para">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <div class="form-group">
    <label class="sr-only" for="para">Number of paragraphs</label>
    <div class="input-group">
    <input type="text" class="form-control" id="para" name="para" placeholder="3">
    </div>
  </div>
  <input type="submit" class="btn btn-primary">Show Paragraphs</button>
  </form>
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
