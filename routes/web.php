<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/showfeed', [FeedController::class, 'index']);

