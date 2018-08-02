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

Route::get('/kalender', function () {
    return view('kalender');


});

Route::get('/event', 'EventController@showAllData');

Route::get('/event/add','EventController@showAddForm');
Route::post('/add','EventController@addData');

Route::get('/event/update/{id}','EventController@showUpdateForm');

Route::post('/update/{id}','EventController@updateData');
Route::get('/delete/{id}','EventController@deleteData');
Route::get('/kalender','EventController@showCalender');
