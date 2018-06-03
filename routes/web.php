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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::post('cp-login', 'Auth\LoginController@login')->name('login');

Route::get('cp-login', function() {
    return view('auth.login');
})->name('login');


Route::any('logout', function(){
	Auth::logout();
	return redirect()->route('homepage');
})->name('logout');

// Tim kiem
Route::get('tim-kiem', function(){
	return "Trang tim kiem";
})->name('search');

// Lien He
Route::get('lien-he', function(){
	return "trang lien he";
})->name('contact');

Route::get('test-layout', function(){
	return view('test');
});

Route::get('register', 'RegisterController@index')->name('register');
Route::post('register', 'RegisterController@createUser');

Route::get('verify/register/{token}', 'RegisterController@verify')->name('verify_user');
use Carbon\Carbon;
// trang chu/danh muc/chitiet
Route::get('/{slug?}', function($slug = null){
	// $past = Carbon::parse('2018-06-02 11:33:49');
	// $now = Carbon::now();
	// $diff = $now->diffInHours($past);
	// dd($diff);

	if(!$slug){
		// hien thi giao dien trang chu
		return view('homepage');
	}
})->name('homepage');


