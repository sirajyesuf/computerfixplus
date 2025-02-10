<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AboutUsController;



Route::get("/",[LandingPageController::class,'index']);
Route::get("/aboutus",[AboutUsController::class,'index']);
Route::get("quote",function(){
    return view("contactus");
});
