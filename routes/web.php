<?php

Route::get('/', function () {
    return view('home');
});

Route::put('/cvs/updateStatus', 'CvController@updateStatus');

Route::resource('cvs', 'CvController');
