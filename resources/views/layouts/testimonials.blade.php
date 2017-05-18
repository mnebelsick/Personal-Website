<section class="testimonials parallax-container" id="testimonials" data-stellar-background-ratio="0.7">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="testi-title">
                    <h3>Testimonials</h3>
                    <hr>
                </div>
                <div id="testi-carousel" class="owl-carousel owl-spaced">
                    @foreach ($testimonials as $testimonial)
                    <div class="wow animated bounceInDown animation-delay-2">
                        <i class="zmdi zmdi-quote"></i>
                        <h4>
                           {!! $testimonial->entry !!}
                        </h4>
                        <p>- {{ $testimonial->submitter }}</p>
                    </div><!--testimonials item like paragraph-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
