<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to "Programmer's best friend" --}}
        @yield('title',"Programmer's best Friend")
    </title>

    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/superhero/bootstrap.min.css" type='text/css' rel='stylesheet'>
  <link href="css/custom.css" type='text/css' rel='stylesheet'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <header>
      <div class="jumbotron center">
        <div class="row">
        <div class="col-sm-1">
        <a href="/"><img src="images/jongalloway-Pluged-in-coder-300px-smaller.png" alt="plugged in programmer" title="Plugged in programmer"/></a>
        </div>
        <div class="col-sm-10">
        <h1 class="text-center">Programmer's best friend</h1>
        <section>
          {{-- Sub heading will be yielded here --}}
          <h2 class="text-center">@yield('sub-heading')</h2>
        </section>
      </div>
      </div>
    </div>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
      <div class="row center">
       <p class="text-center">&copy; {{ date('Y') }}</p>
        <p class="text-center"><a href="https://openclipart.org/detail/3580/pluged-in-coder">Logo image from open clipart library</a></p>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
