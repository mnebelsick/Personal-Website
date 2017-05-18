<?php

namespace App\Http\Controllers;

use App\Item;

use App\Detail;

use App\Testimonial;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
		$items = Item::all();

		//dd($items);

		$details = Detail::all();

		//dd($details);

		$testimonials = Testimonial::all();

		//dd($testimonials);


		return view('index', compact('items', 'details', 'testimonials'));
    }
	
}
