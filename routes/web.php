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
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket', 'TicketController@index');
Route::get('/ticket/airline', 'TicketController@airline');
Route::post('/ticket/saveairline', 'TicketController@saveairline');
Route::get('/ticket/drop', 'TicketController@drop');
Route::post('/ticket/savedrop', 'TicketController@savedrop');
Route::get('/ticket/travel', 'TicketController@travel');
Route::post('/ticket/savetravel', 'TicketController@savetravel');
Route::get('/ticket/hotel', 'TicketController@hotel');
Route::post('/ticket/savehotel', 'TicketController@savehotel');
Route::get('/ticket/rental', 'TicketController@rental');
Route::post('/ticket/saverental', 'TicketController@saverental');
Route::get('/ticket/kai', 'TicketController@kai');
Route::post('/ticket/savekai', 'TicketController@savekai');
Route::get('/ticket/paket', 'TicketController@paket');
Route::post('/ticket/savepaket', 'TicketController@savepaket');

