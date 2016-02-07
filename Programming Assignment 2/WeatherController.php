<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{
	public getWeather($location){
		return "Weather at".$location;
	}

}
