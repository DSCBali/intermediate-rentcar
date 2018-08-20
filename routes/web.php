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
    //return view('auth.login');
    return view('front.master');
});

Route::prefix('admin')->group(function(){
    Route::get('index', function(){
        return 'ini admin';
    });
});

Route::prefix('user')->group(function(){
	Route::get('login', function(){
		return view('auth.login');
	});
	Route::get('dashboard', function(){
		return view('front.master');
	})->name('user.master');
});

Route::middleware('auth')->group(function(){
	Route::get('dashboard', function(){
      return view('dashboard');
    })->name('admin.dashboard');

	Route::resource('user','UserController');
	Route::resource('car', 'CarController');
	Route::resource('car_brand', 'CarBrandController');
	Route::resource('employee', 'EmployeeController');
	Route::resource('payment', 'PaymentController');
	Route::resource('booking', 'BookingController');
	Route::resource('client', 'ClientController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
