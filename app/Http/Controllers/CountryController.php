<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;

use App\State;

class CountryController extends Controller
{


	public function index()
	{           

		// $countrys = Country::all();

		// $countrys = State::find(1);

		// con el metodo with() relaciono las tablas de una vez
		$countrys = Country::with('state')->get();

		// $countrys = State::with('country')->get();


		// $countrys = App\State::find(1)->id_country;

		// $countrys = State::all();          

		return $countrys;        
	}
}
