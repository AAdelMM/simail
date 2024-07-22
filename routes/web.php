<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('en.layouts.master');
});
Route::get('/certified', function () {
    return view('en.pages.certified');
    });
