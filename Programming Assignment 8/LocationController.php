<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Location;
use App\Story;


class LocationController extends Controller
{
	public function index(){
//		$locations = Location::all();
		$locations = Location::with('stories')->get();
		return view('locations',['locations'=>$locations]);
	}    
}