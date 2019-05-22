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

Route::get('/', function () {
    return redirect('/contacts');
})->name('index');

Route::get('contacts', function () {
    return view('contacts.index');
});
Route::group(['prefix' => 'ajax'], function () {
    Route::get('contacts', 'Ajax\ContactController@getContacts')->name('ajax.contacts.get');
});
