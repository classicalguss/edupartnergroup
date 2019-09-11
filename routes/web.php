<?php

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

use \App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function() {
    return view ('about');
})->name('about');

Route::get('services/audit', 'ServicesController@audit')->name('audit');
Route::get('services/schools-management', 'ServicesController@schoolManagement')->name('school-management');
Route::get('services/teachers-training', 'ServicesController@teachersTraining')->name('teachers-training');
Route::get('services/teachers-recruiting', 'ServicesController@audit')->name('teachers-recruiting');

Route::get('contact', 'ContactController@create')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact.store');


