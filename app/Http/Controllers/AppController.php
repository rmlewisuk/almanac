<?php

namespace Almanac\Http\Controllers;

use Spatie\Tags\Tag;

class AppController extends Controller
{
    public function index()
    {
	    $tags = Tag::all()->sortBy('name');

	    $tags = $tags->map(function(Tag $tag) {
		    return $tag->name;
	    })->values()->toArray();

	    return view('admin')->with([
	    	'tags' => $tags,
		    'searchConfig' => [
		    	'movie' => (bool) env('THEMOVIEDB_API_KEY'),
			    'tv' => (bool) env('THEMOVIEDB_API_KEY'),
                'game' => (bool) env('GIANTBOMB_API_KEY'),
		    ],
	    ]);
    }
}
