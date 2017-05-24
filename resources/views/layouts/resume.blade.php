<section class="resume" id="resume">
    <div class="container">

    <div class="row">
        <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
            <div class="header-title">
                <h1>Resume</h1>
                <hr>
                <p>
                PHP WEB DEVELOPMENT ENGINEER<br>
                Deliver Innovative Solutions to Complex Problems | Drive Efficiency Through Simplification
                </p>
                <p>
                Career highlights below, or download <a href=/nebelsick_michael_resume_web_development.pdf> full resume</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="experience">
                <h2 class="fadeIn animated wow" data-wow-delay=".1s">Experience</h2>
            </div>
        </div>
    </div>



    <div class="time-line"> 
        @foreach($experiences as $experience)
            @if($loop->iteration % 2)
                @php 
                    $direction = 'right';
                    $fadeInDirection = 'fadeInRight';
                    $second = '';
                @endphp
            @else
                @php 
                    $direction = 'left';
                    $fadeInDirection = 'fadeInLeft';
                    $second = 'second'
                @endphp
            @endif

            @if($loop->last)
                @php
                    $last = '-tird';
                @endphp
            @else
                @php
                    $last = '';
                @endphp
            @endif

            <div class="row">
                <div class="col-sm-6 pull-{{ $direction }} rex-{{ $direction }}">
                    <div class="colam{{ $last }}">
                    <div class="rs-round {{ $second }}">
                        <i class="{{ $experience->image_class }}"></i>
                    </div>
                        <div class="rex-item animated {{ $fadeInDirection }} wow" data-wow-delay="{{ $experience->delay }}">
                            <h3>{{ $experience->timeframe }}</h3>
                            <h4>{!! $experience->title !!}</h4>
                            <p>{!! $experience->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach      
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="education fadeIn animated wow animated" data-wow-delay=".1s">
                <h3>Education</h3>
            </div>
        </div>
    </div>

    <div class="time-line">

        @foreach($educations as $education)
            @if($loop->iteration % 2)
                @php 
                    $direction = 'right';
                    $fadeInDirection = 'fadeInRight';
                    $second = '';
                @endphp
            @else
                @php 
                    $direction = 'left';
                    $fadeInDirection = 'fadeInLeft';
                    $second = 'second'
                @endphp
            @endif

            @if($loop->last)
                @php
                    $last = '-tird';
                @endphp
            @else
                @php
                    $last = '';
                @endphp
            @endif

            <div class="row">
                <div class="col-sm-6 pull-{{ $direction }} rex-{{ $direction }}">
                    <div class="colam{{ $last }}">
                    <div class="rs-round {{ $second }}">
                        <i class="{{ $education->image_class }}"></i>
                    </div>
                        <div class="rex-item animated {{ $fadeInDirection }} wow" data-wow-delay="{{ $education->delay }}">
                            <h3>{{ $education->timeframe }}</h3>
                            <h4>{!! $education->title !!}</h4>
                            <p>{!! $education->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach      
    </div>
</section>