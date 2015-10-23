@extends('layouts.master')

@section('title')
    Show Users
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
  Show Users
@stop

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
  <h3>Number of users requested: {{ $data['users'] }}</h3>
  @if(count($users_data) > 0)
      @foreach($users_data as $person)
          <h4 class="text-success">{{ $person['name'] }}</h4>
          <p>{{ $person['address'] }}<br/>
          <em>{{ $person['email'] }}</em></p>
          <br/>
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
