<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Tag;
use App\Location;

class StoryController extends Controller
{
	public function index(){
		$stories = Story::all();
		return view('stories',['stories'=>$stories]);
	}
	
	public function tags(){
		$tags = Tag::all();
		return view('tags',['tags' => $tags]);
	}

	public function create(){
		$locations = Location::all();
		return view('story.create',['locations'=>$locations]);
	}

	public function store(Request $request){
		$story = $request->input('story');
	}

}
