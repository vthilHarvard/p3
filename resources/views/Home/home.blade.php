@extends('layouts.master')


@section('title')
    Home page for Programmer's best friend
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
  Some tools of the trade
@stop

@section('content')
<div class="row">

<div class="col-md-8 col-md-offset-2">
  <div class="row">
    <img class="img-center" src="images/jongalloway-Pluged-in-coder-300px.png" alt="plugged in programmer" title="Plugged in programmer"/>
  </div>
  <h3 class="text-center text-warning">Behold the lonely developer/programmer, who has developed a hunch before turning 30!!<br/></h3>
  <h4 class="text-center">There are many possible tools that can ease the burden of a programmer's job as he or she toils away into the wee hours of the morning.</h4>
  <h4>Here are a couple of them:</h4>
  <ol>
    <li><a href="/para">Lorem Ipsum Generator</a>- Enter the number of paragraphs of filler text that you need</li>
  <li><a href="/users">Random User Generator</a>- Enter the number of random user information you're looking for</li>
</ol>

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
