<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => '',
            'author' => '',
            'text' => '',
            'type' => 'required',
        ]);

        Review::create($request->only([
            'link',
            'author',
            'text',
            'type'
        ]));

        return redirect('/reviews/');
    }
}
