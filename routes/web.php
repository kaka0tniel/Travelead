<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'homeController@home');

Route::get('/register','RegisterController@getRegister');
Route::get('/login','LoginController@getLogin');
Route::post('/postRegister','RegisterController@postRegister');
Route::post('/postLogin','LoginController@postLogin');

Route::get ('logout',function(){
  Auth::logout();
  return redirect('/');
});


Route::get('pageAksesKhusus',function(){
    return view('pageAksesKhusus');
});

Route::get('/delete','AdminController@delete');
Route::get('/update','AdminController@update');

Route::group(['middleware'=>['web']], function(){
  Route::resource('ticket','TicketController');
  Route::get('/pemesanan','TicketController@pemesanan');
  Route::get('/pemesanan/batal/{id}','TicketController@batal');
  Route::get('/pemesanan/konfirmasi/{id}','TicketController@konfirmasi');
});

Route::group(['middleware'=>['web']], function(){
  Route::resource('custommer','DaftarTicketController');
    Route::get('custommer/pesan/{id}','DaftarTicketController@pesan');
    Route::post('custommer/pesan/pemesanan','DaftarTicketController@pemesanan');
    Route::get('/pesanan','DaftarTicketController@pesanan');
    Route::get('/ticket_custommer','DaftarTicketController@ticket_custommer');
});
