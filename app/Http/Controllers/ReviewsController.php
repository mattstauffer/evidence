<?php

namespace App\Http\Controllers;

use App\Review;
use App\Reviewee;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('reviews.index')
            ->with('reviews', Review::all());
    }

    public function create()
    {
        return view('reviews.create')
            ->with('reviewees', Reviewee::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => '',
            'author' => '',
            'text' => '',
            'title' => '',
            'type' => 'required',
            'source' => '',
            'reviewee' => 'required' // exists in
        ]);

        $reviewee = Reviewee::findOrFail($request->input('reviewee'));

        $reviewee->reviews()->create($request->only([
            'link',
            'author',
            'title',
            'text',
            'type',
            'source'
        ]));

        return redirect('/reviews/');
    }
}
