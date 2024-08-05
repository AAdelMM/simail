<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('en.layouts.master');
});
Route::get('/certified', function () {
    return view('en.pages.certified');
    });

Route::get('/structure', function () {
    return view('en.pages.structure');
    });

Route::get('/contactus', function () {
    return view('en.pages.contact_us');
    });

Route::get('/field', function () {
        return view('en.pages.fields');
        });

Route::get('/machien', function () {
    return view('en.pages.machien');
    });