<!-- HOME
======================================================= -->
<section class="carousel-section" id="home">
    <div class="overlay"></div>
    <div id="carousel-example-generic" class="carousel carousel-razon" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        @foreach ($items as $item)
            @unless ($loop->index)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="active"></li>
            @else
                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}"></li>
            @endunless
        @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        @php ($active = 'active')
        @foreach ($items as $item)
            <div class="item {{ $active }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDown wow carousel-title" data-wow-delay=".1s"><span>{{ $item->title }}</span></h1>
                                    <p class="fadeInDown wow animated" data-wow-delay=".2s">
                                         {!! $item->body !!}
                                    </p>
                                    <!--
                                    <a href="#" class="waves-effect waves-light btn btn-custom animated fadeInDown wow" data-wow-delay=".4s">Purchase Now</a>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php ($active = '')
        @endforeach
        </div>
    </div>
</section> 
<!-- end HOME/SLIDER -->