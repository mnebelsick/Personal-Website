<?php

namespace App\Http\Controllers;

use App\Item;

use App\Detail;

use App\Testimonial;

use App\Credential;

use Illuminate\Http\Request;

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


		return view('index', compact('items', 'details', 'testimonials', 'experiences', 'educations'));
    }
	
}
