<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;



Route::get("/",[LandingPageController::class,'index']);
Route::get("/aboutus",function(){
    return view("aboutus");
});
Route::get("contactus",function(){
    return view("contactus");
});
