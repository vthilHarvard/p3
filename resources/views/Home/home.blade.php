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
  <h3 class="text-center text-warning">Behold the lonely developer, who has developed a hunch before turning 30!!<br/></h3>
  <h4 class="text-center">There are many possible tools that can ease the burden of a programmer's job as he or she toils away into the wee hours of the morning.</h4>
  <h4>Here are a couple of them:</h4>

    <h4><a href="/para">Lorem Ipsum Generator</a>- What is Lorem Ipsum?</h4>
    <h5>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
      <a href="http://www.lipsum.com/">Read more ...</a></h5>
    <h5>While creating websites nowadays, we use the lorem ipsum text to simulate content on our web pages.</h5>
    <h5 class="text-info"> In this implementation, by specifying a number from 1-10, we generate that many paragraphs of lorem-ipsum text.</h5>
    <h4><a href="/users">Random User Generator</a>- Why do we need random users?</h4>
    <h5>Just like filler text, we sometimes need 'filler' users to test login and interaction with our sites. The current API that is used has the capability of generating various credentials for users.
      In the current implementation it generates a name, address, email address and a phone number for the user.</h5>
    <h5 class="text-info">In this implementation, by specifying a number between 1 and 100, we can generate that many user credentials.
    </h5>
    <h3>Click on the links or menu options above and give it a spin!</h3>
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
