<?php

Route::get('/', function () {
    return view('home');
});

Route::resource('cvs', 'CvController');
