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
    return view('welcome');
});
//Route::view('contact','Contacts');
//Route::post('submit','ContactController@create');
//login form laravel
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Contact
Route::get('index','ContactController@index');
Route::get('contact','ContactController@create');
Route::post('submit','ContactController@store');
//crud 
Route::resource('products','ProductController');
//
Route::resource('rooms','RoomController');

//laravel login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route:: get('/role-register','Admin\DashboardController@registered');
    Route::get ('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route:: put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

    Route:: get('/roomtype','Admin\RoomTypeController@index');
    Route::post('/save-roomtype','Admin\RoomTypeController@store');
    Route::get('/roomtype/{room_type_id}','Admin\RoomTypeController@edit');
    Route::put('/roomtype-update/{room_type_id}','Admin\RoomTypeController@update');
    Route::delete('roomtype-delete/{room_type_id}','Admin\RoomTypeController@delete');

    Route:: get('/roomstatus','Admin\RoomStatusController@index');
    Route::post('/save-roomstatus','Admin\RoomStatusController@store');
    Route::get('/roomstatus/{room_status_id}','Admin\RoomStatusController@edit');
    Route::put('/roomstatus-update/{room_status_id}','Admin\RoomStatusController@update');
    Route::delete('roomstatus-delete/{room_status_id}','Admin\RoomStatusController@delete');

    Route:: get('/room','Admin\RoomController@index');
    Route::post('/save-room','Admin\RoomController@store');
    Route::get('/room/{room_id}','Admin\RoomController@edit');
    Route::put('/room-update/{room_id}','Admin\RoomController@update');
    Route::delete('room-delete/{room_id}','Admin\RoomController@delete');

    //contact form front end to back end
Route::resource('contact','ContController');
Route::get('ucontact','ContController@create');
Route::get('contactus','ContController@index');

Route::resource('book','BookController');
Route::get('booking','BookController@create');
});

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/room', function () {
    return view('frontend.rooms');
});

Route::get('/restaurant', function () {
    return view('frontend.restaurant');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog1', function () {
    return view('frontend.blog1');
});

Route::get('/blog2', function () {
    return view('frontend.blog2');
});
Route::get('/blog3', function () {
    return view('frontend.blog3');
});

Route::get('/blog4', function () {
    return view('frontend.blog4');
});
Route::get('/blog5', function () {
    return view('frontend.blog5');
});

Route::get('/blog6', function () {
    return view('frontend.blog6');
});

Route::get('/career', function () {
    return view('frontend.career');
});

Route::get('/payment', function () {
    return view('frontend.payment');
});

Route::get('/promotion', function () {
    return view('frontend.promotion');
});

Route::get('/roomclassic', function () {
    return view('frontend.rooms-classic');
});
Route::get('/roomdeluxe', function () {
    return view('frontend.rooms-deluxe');
});
Route::get('/roomfamily', function () {
    return view('frontend.rooms-family');
});
Route::get('/roomluxury', function () {
    return view('frontend.rooms-luxury');
});
Route::get('/roomsuite', function () {
    return view('frontend.rooms-suite');
});
Route::get('/roomsuperior', function () {
    return view('frontend.rooms-superior');
});
Route::get('/room', function () {
    return view('frontend.room');
});


