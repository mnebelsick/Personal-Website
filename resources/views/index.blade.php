<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicons -->
    <link rel="shortcut icon" href="images/favico.ico">

    <title> Michael Nebelsick </title>    

    @include('css')

  </head>


  <body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
        <div class="loader">
            Loading...
        </div>
    </div> 
    <!-- End Preloader -->

    @include('navbar')


    @include('home-slider')


    @include('about')


    @include('fun-facts')


    @include('resume')


    @include('portfolios')


    @include('testimonials')


    @include('blog')


    @include('contact')


    @include('maps')


    @include('footer')


    @include('style-switcher')


    @include('javascript')


    </body>
</html>