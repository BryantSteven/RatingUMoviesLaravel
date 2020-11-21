<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends BaseController
{
    public function store(Request $request)
    {
        $review = new Review();
        $review->content = $request->content;
        $review->user_id = Auth::id();
        $review->movie_id = $request->movie_id;
        $review->save();

        return back();

    }

    
}
