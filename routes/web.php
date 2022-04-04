<?php

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( ['middleware' => 'auth'], function() {

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin',
        'as' => 'admin.',
        //'namespace' => 'Admin'
   ], function() {
                    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');   
                 });


    Route::group([
        'prefix' => 'citymanager',
        'middleware' => 'citymanager',
        'as' => 'citymanager.',
        //'namespace' => 'City_manager'
   ], function() {
                    Route::get('/', [App\Http\Controllers\City_manager\HomeController::class, 'index'])->name('home');   
});

    Route::group([
        'prefix' => 'gymmanager',
        'middleware' => 'gymmanager',
        'as' => 'gymmanager.',
        //'namespace' => 'Gym_manager'
   ], function() {
                    Route::get('/', [App\Http\Controllers\Gym_manager\HomeController::class, 'index'])->name('home');   
});

});