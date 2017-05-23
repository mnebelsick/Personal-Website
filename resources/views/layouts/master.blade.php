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

        <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-99764974-1', 'auto');
      ga('send', 'pageview');
    </script>

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