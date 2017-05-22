<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicons -->
    <link rel="shortcut icon" href="images/favico.ico">

    <title> Michael Nebelsick </title>    

    @include('layouts.css')

  </head>


  <body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
        <div class="loader">
            Loading...
        </div>
    </div> 
    <!-- End Preloader -->

    @include('layouts.navbar')


    @yield('home-slider')


    @yield('about')


    @include('layouts.fun-facts')


    @yield('resume')


    @include('layouts.portfolios')


    @yield('testimonials')


    <!-- @include('layouts.blog') -->


    @include('layouts.contact')


    @include('layouts.maps')


    @include('layouts.footer')


    @include('layouts.style-switcher')


    @include('layouts.javascript')


    </body>
</html>