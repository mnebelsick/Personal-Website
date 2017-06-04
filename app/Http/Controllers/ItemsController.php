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

		$token = '81395c1379d4a896aa856bec4218ed128ffec0d2';
		$client = new Client(['base_uri' => 'https://www.strava.com/api/v3/']);

		$headers = [
		    'Authorization' => 'Bearer ' . $token,        
		    'Accept'        => 'application/json',
		];
		$response = $client->request('GET', 'athletes/2194969/stats', [
	        'headers' => $headers
	    ]);

	    $strava_rides = json_decode((string) $response->getBody());

	    //dd($strava_rides);

		return view('index', compact('items', 'details', 'testimonials', 'experiences', 'educations', 'strava_rides'));
    }
	
}
