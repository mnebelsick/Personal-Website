<section class="fun-facts bg-dark" id="fun-facts">
  <div class="container">
    <div class="row">
    <h1>Fun Biking Facts (from Strava)</h1>
        
         <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".1s">
            <i class="icon-badge"></i>
            <div class="counter">
                <h1 class="counter-list">{{ $strava_rides->all_ride_totals->count }}</h1>
                <h2>Bike Rides</h2>
            </div>
        </div> 

        <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".5s">
            <i class="icon-picture"></i>
            <div class="counter">
                <h1 class="counter-time">{{ number_format($strava_rides->all_ride_totals->distance / 1609.344 , 2, '.', ',')}}</h1>
                <h2>Miles Ridden</h2>
            </div>
        </div>   

        <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".3s">
            <i class="icon-energy"></i>
            <div class="counter">
                <h1 class="counter-time">{{ number_format($strava_rides->biggest_ride_distance / 1609.344 , 2, '.', ',')}}</h1>
                <h2>Longest Ride</h2>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".7s">
            <i class="icon-clock"></i>
            <div class="counter">
                <h1 class="counter-time">{{ number_format($strava_rides->all_ride_totals->moving_time / 3600 , 2, '.', ',')}}</h1>
                <h2>Riding Time (Hours)</h2>
            </div>
        </div> 

    </div> <!-- / row -->
  </div>  <!--  /container -->
</section>