<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

Route::prefix('site1')->name('site1.')->controller(SiteOneController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/Transporter', 'Transporter')->name('Transporter');
    Route::post('/contact', 'postcontact')->name('postcontact');
   
});


