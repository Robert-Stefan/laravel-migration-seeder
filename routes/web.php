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

// HOMEPAGE
Route::get('/', 'PageController@index') -> name('home');

// CONTACT US
Route::get('/contacts', 'PageController@contacts') -> name('contacts');

// PLANS
Route::get('/plans', 'PlanController@index')->name('plans');