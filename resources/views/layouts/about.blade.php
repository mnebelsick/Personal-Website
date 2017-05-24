<!-- About-US
================================================== --> 

<section class="about" id="about-me">
    <div class="container"> 

        <div class="row">
            <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                <div class="header-title">
                    <h1>About</h1>
                    <hr>
                    <!--
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore.</p>
                    -->
                </div>
            </div>
        </div><!-- /End row -->

        @foreach ($details as $detail)
        <div class="row">

            <div class="col-md-8 col-sm-6 col-xs-12">

                <div class="introduce">

                    <h2 class="title animated fadeInLeft wow" data-wow-delay=".2s">Personal Details</h2>
                    
                    <p class="animated fadeInLeft wow" data-wow-delay=".4s">{!! $detail->aboutme !!}</p>

                    <div class="presonal-inform">
                        <ul>
                            <li class="animated fadeIn wow" data-wow-delay=".1s"><b>Name:</b>{{ $detail->name }}</li>
                            <li class="animated fadeIn wow" data-wow-delay=".2s"><b>Phone:</b>{{ $detail->phone }}</li>
                            <li class="animated fadeIn wow" data-wow-delay=".3s"><b>Email:</b>{{ $detail->email }}</li>
                            <li class="animated fadeIn wow" data-wow-delay=".1s"><b>City:</b>{{ $detail->city }}</li>
                            <li class="animated fadeIn wow" data-wow-delay=".2s"><b>State:</b>{{ $detail->state }}</li>
                            <li class="animated fadeIn wow" data-wow-delay=".4s"><b>Languages:</b>{{ $detail->languages }}</li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="about-img animated fadeInRight wow animated" data-wow-delay=".5s">
                    <img src="{{ $detail->image }}" class="img-responsive" alt="About-image">
                </div>
            </div>

        </div>
        @endforeach
        

        <div class="row">

            <div class="col-md-6">

                <div class="skill-title">
                    <h3>Skills</h3>
                </div>

                <div class="skills-progress animated fadeInLeft wow" data-wow-delay=".4s" id="skills">
                    <h4>PHP<span>85%</span></h4>
                    <div class="progress-solid meter">
                        <div class="progress-bar" role="progressbar" data-percent="85%" aria-valuenow="75" aria-valuemin="0">
                            <span class="sr-only">85% Complete</span>
                        </div>
                    </div>

                    <h4>CSS 3<span>70%</span></h4>
                    <div class="progress-solid meter">
                        <div class="progress-bar" role="progressbar" data-percent="70%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>

                    <h4>Javascript<span>85%</span></h4>
                    <div class="progress-solid meter animated-skills">
                        <div class="progress-bar" role="progressbar" data-percent="85%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">85% Complete</span>
                        </div>
                    </div>

                    <h4>Oracle<span>95%</span></h4>
                    <div class="progress-solid meter animated-skills">
                        <div class="progress-bar" role="progressbar" data-percent="95%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">95% Complete</span>
                        </div>
                    </div>

                </div>  
            </div> <!-- end colommen -->

            <div class="col-md-6">
                <div class="skills-progress animated fadeInLeft wow" data-wow-delay=".6s" id="skills-progress">
                    <h4>HTML 5<span>76%</span></h4>
                        <div class="progress-solid meter animated-skills">
                            <div class="progress-bar" role="progressbar" data-percent="76%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">76% Complete</span>
                        </div>
                    </div>

                    <h4>Web Development<span>98%</span></h4>
                        <div class="progress-solid meter animated-skills">
                            <div class="progress-bar" role="progressbar" data-percent="98%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">98% Complete</span>
                        </div>
                    </div>

                    <h4>ColdFusion<span>85%</span></h4>
                        <div class="progress-solid meter animated-skills">
                            <div class="progress-bar" role="progressbar" data-percent="85%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">85% Complete</span>
                        </div>
                    </div>

                    <h4>MySQL<span>95%</span></h4>
                    <div class="progress-solid meter animated-skills">
                        <div class="progress-bar" role="progressbar" data-percent="95%" aria-valuemax="100" aria-valuemin="0">
                            <span class="sr-only">95% Complete</span>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End row -->

    </div><!-- /container -->
</section><!-- /section -->