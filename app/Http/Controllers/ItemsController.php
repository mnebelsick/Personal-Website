<?php

namespace App\Http\Controllers;

use App\Item;

use App\Detail;

use App\Testimonial;

use App\Credential;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;

use GuzzleHttp\Client;

class ItemsController extends Controller
{
    public function index()
    {
		$items = Item::all()->random(3);

		//dd($items);

		$details = Detail::all();

		//dd($details);

		$testimonials = Testimonial::all()->random(3);

		//dd($testimonials);

		$experiences = Credential::where('type', 'Exp')->orderby('timeframe', 'desc')->get();

		//dd($experiences);

		$educations = Credential::where('type', 'Edu')->orderby('timeframe', 'desc')->get();

		//dd($educations);

		$bearer  = config('services.strava.bearer');
		$athlete = config('services.strava.athlete');

		$client = new Client(['base_uri' => 'https://www.strava.com/api/v3/']);

		$headers = [
		    'Authorization' => 'Bearer ' . $bearer,        
		    'Accept'        => 'application/json',
		];
		$response = $client->request('GET', 'athletes/'. $athlete . '/stats', [
	        'headers' => $headers
	    ]);

	    $strava_rides = json_decode((string) $response->getBody());

	    // $response2 = $client->request('GET', 'activities', [
	    //     'headers' => $headers
	    // ]);

	    // $strava_activities = json_decode((string) $response2->getBody());

	    // //dd($strava_activities);

   		// $response3 = $client->request('GET', 'athletes/'. $athlete . '/koms', [
	    //     'headers' => $headers
	    // ]);

	    // $strava_koms = json_decode((string) $response3->getBody());

	    // //dd($strava_koms);

		return view('index', compact('items', 'details', 'testimonials', 'experiences', 'educations', 'strava_rides'));
    }
	
}
