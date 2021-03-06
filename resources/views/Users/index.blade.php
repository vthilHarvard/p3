@extends('layouts.master')

@section('title')
    Generate random users
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
  Create Random Users
@stop

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
  @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 @endif
 <h3>How many random user's information would you like?</h3>
  <form class="form-vertical" method="POST" action="/users">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <div class="form-group">
    <label for="users">Number of users(Enter a number between 1 and 100)</label>
    <div class="input-group">
    <input type="text" class="form-control" id="users" name="users" placeholder="3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Show Users</button>
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
