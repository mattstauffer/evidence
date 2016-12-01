<?php
/**
 * Track:
 *     tweets
 *         tweet link; tweet text? pictures?
 *     quotes
 *         "text" "author" "link"
 *     link
 *         title
 *         highlight
 *         author
 *     review
 *         source (amazon, etc)
 *         original url
 *         content
 *         author
 *         rating (out of 5)
 *
 *  Review
 *      Link
 *      Author
 *      Text
 *      Type - tweet, quote, link, review
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('reviews', 'ReviewsController@index');
Route::get('reviews/create', 'ReviewsController@create');
Route::post('reviews', 'ReviewsController@store');



Auth::routes();

Route::get('/home', 'HomeController@index');
