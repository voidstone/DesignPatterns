<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/property-container', [App\Http\Controllers\FundamentalPatternsController::class, 'PropertyContainer'])->name('property-container');
Route::get('/delegation', [App\Http\Controllers\FundamentalPatternsController::class, 'delegation'])->name('delegation');
Route::get('/eventChannel', [App\Http\Controllers\FundamentalPatternsController::class, 'eventChannel'])->name('eventChannel');
Route::get('/interface', [App\Http\Controllers\FundamentalPatternsController::class, 'interface'])->name('interface');


Route::get('/abstract-factory', [App\Http\Controllers\CreationalPatternsController::class, 'abstractFactory'])->name('abstract-factory');
Route::get('/factory-method', [App\Http\Controllers\CreationalPatternsController::class, 'factoryMethod'])->name('factory-method');
Route::get('/static-factory', [App\Http\Controllers\CreationalPatternsController::class, 'staticFactory'])->name('static-factory');
Route::get('/simply-factory', [App\Http\Controllers\CreationalPatternsController::class, 'simpleFactory'])->name('simply-factory');
Route::get('/singleton', [App\Http\Controllers\CreationalPatternsController::class, 'singleton'])->name('singleton');



Route::get('/strategy', [App\Http\Controllers\BehavioralPatternsController::class, 'strategy'])->name('strategy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
