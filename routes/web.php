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

Route::get('/signup', function () {
    return view('patientEntryForm');
});

Route::get('/visit', function () {
    return view('visitEntryForm');
});

Route::post('patientSave','patientEntryForm@save');

Route::post('/visitSave','patientVisitForm@save');

Route::get('/upcoming','patientEntryForm@visitDeadlineInfo');