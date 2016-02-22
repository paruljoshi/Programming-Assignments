<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
	public function index(){
		$stories = Stories::all();
		return view('stories',['stories'=>$stories]);
	}
	
	public function tags(){
		$tags = Tags::all();
		return view('tags',['tags' => $tags]);
	}

}
