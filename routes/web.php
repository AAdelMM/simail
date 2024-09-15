<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

//English version

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

//Arabic Version
Route::get('/ar', function () {
    return view('ar.layouts.master');
});
Route::get('/ar/certified', function () {
    return view('ar.pages.certified');
    });

Route::get('/ar/structure', function () {
    return view('ar.pages.structure');
    });

Route::get('/ar/contactus', function () {
    return view('ar.pages.contact_us');
    });

Route::get('/ar/field', function () {
        return view('ar.pages.fields');
        });

Route::get('/ar/machien', function () {
    return view('ar.pages.machien');
    });