<?php

Route::get('/', function () {
    return view('home');
});

Route::resource('cv', 'CvController');
