<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//all listings
Route::get('/', [ListingController::class, 'index']);

//Show Create form
Route::get('/listings/create',[ListingController::class, 'create']);

//store listing data
Route::post('/listings',[ListingController::class, 'store']);


//single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);