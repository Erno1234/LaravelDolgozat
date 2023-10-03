<?php

use App\Http\Controllers\OrganisationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/organisation',[OrganisationController::class,'index']);
Route::get('/api/organisation/{id}',[OrganisationController::class,'show']);
Route::get('/api/organisation',[OrganisationController::class,'store']);
Route::get('/api/organisation/{id}',[OrganisationController::class,'update']);
Route::get('/api/organisation/{id}',[OrganisationController::class,'destroy']);
Route::get('/api/organisation/new',[OrganisationController::class,'newView']);
Route::get('/api/organisation/edit/{id}',[OrganisationController::class,'editView']);
Route::get('/api/organisation/list',[OrganisationController::class,'listView']);
