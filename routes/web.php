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
    //return view('pages.dashboard');
    return view('auth.login');
});

Route::resource('user','UserController')->middleware('auth');
Route::resource('car', 'CarController')->middleware('auth');
Route::resource('car_brand', 'CarBrandController')->middleware('auth');
Route::resource('employee', 'EmployeeController')->middleware('auth');
Route::resource('payment', 'PaymentController')->middleware('auth');
Route::resource('booking', 'BookingController')->middleware('auth');
Route::resource('client', 'ClientController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
