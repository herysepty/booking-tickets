<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('error', function(){
	return view('errors.503');
});
Route::get('/', function () {
    return view('content.home');
});
Route::get('/home', function () {
    return view('content.home');
});
Route::get('about', function () {
    return view('content.about');
});
Route::get('login', function(){
	return view('auth.login');
});
Route::get('register', function(){
	return view('auth.register');
});

Route::get('member', function(){
	return view('member');
});

//login
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

 // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'],function () {
    Route::get('user', 'UserController@index');
	Route::get('user/add', 'UserController@form');
	Route::get('user/search', 'UserController@find');
	Route::get('user/edit/{id}','UserController@edit');
	Route::get('user/delete/{id}','UserController@destroy');
	Route::get('user/change-password','UserController@formChangePassword');
	Route::post('user/change-password','UserController@changePassword');
	//manipulasi
	Route::post('user', 'UserController@store');
	Route::post('user/update', 'UserController@update');

	//
	Route::get('ticket-type', 'TicketTypeController@index');
	Route::get('ticket-type/add', function(){
		return view('content.ticket_type_form');
	});
	Route::get('ticket-type/edit/{id}','TicketTypeController@edit');
	Route::get('ticket-type/delete/{id}','TicketTypeController@destroy');

	Route::post('ticket-type', 'TicketTypeController@store');
	Route::post('ticket-type/update', 'TicketTypeController@update');
	
	//
	Route::get('ticket', 'TicketController@index');
	Route::get('ticket/add', 'TicketController@form');
	Route::get('ticket/search', 'TicketController@find');
	Route::get('ticket/edit/{id}','TicketController@edit');
	Route::get('ticket/delete/{id}','TicketController@destroy');

	Route::post('ticket', 'TicketController@store');
	Route::post('ticket/update', 'TicketController@update');

	//
	Route::get('seat', 'SeatController@index');
	Route::get('seat/add', 'SeatController@form');
	Route::get('seat/edit/{id}','SeatController@edit');
	Route::get('seat/delete/{id}','SeatController@destroy');

	Route::post('seat', 'SeatController@store');
	Route::post('seat/update', 'SeatController@update');

	//
	Route::get('payment', 'PaymentController@index');
	Route::get('payment/add', 'PaymentController@form');
	Route::get('payment/edit/{id}','PaymentController@edit');
	Route::get('payment/delete/{id}','PaymentController@destroy');

	Route::post('payment', 'PaymentController@store');
	Route::post('payment/update', 'PaymentController@update');

	//
	Route::get('venue', 'VenueController@index');
	Route::get('venue/add', 'VenueController@form');
	Route::get('venue/edit/{id}','VenueController@edit');
	Route::get('venue/delete/{id}','VenueController@destroy');

	Route::post('venue', 'VenueController@store');
	Route::post('venue/update', 'VenueController@update');
	//
	Route::get('booking/show/{id}', 'BookingController@show');


 });

	Route::get('booking', 'BookingController@index');
	Route::get('booking/delete/{id}', 'BookingController@destroy');
	Route::get('booking/add', 'BookingController@form');
	Route::post('booking/add-ticket', 'BookingController@addTicket');
	Route::get('booking/add-ticket/{id}', 'BookingController@showTicket');
	Route::post('booking/add-show', 'BookingController@addShow');
	Route::get('booking/add-show/{id}', 'BookingController@displayShow');
	Route::post('booking/add-booking', 'BookingController@addBooking');

	Route::post('booking/destroy-ticket', 'BookingController@destroyTicket');
	Route::post('booking/destroy-show', 'BookingController@destroyShow');





