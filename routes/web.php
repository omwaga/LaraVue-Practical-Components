<?php

Route::get('/', function () {
    return view('app');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::resource('testimonial', 'TestimonialController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
