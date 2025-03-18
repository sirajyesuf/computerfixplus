<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\QuoteController;

Route::get("/", [LandingPageController::class, "index"]);
Route::get("/aboutus", [AboutUsController::class, "index"]);
Route::get("quote", [QuoteController::class, "index"]);
Route::post("quote", [QuoteController::class, "sendEmail"])->name(
    "getquote.email"
);

Route::get('/privacypolicy',function(){
    return view('privacy-policy');
})->name('privacy.policy');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
