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
Route::get('login', function() {
    return 'login page';
})->name('login');


Route::any('logout', function(){
	return 'logout';
})->name('logout');

// Tim kiem
Route::get('tim-kiem', function(){
	return "Trang tim kiem";
})->name('search');

// Lien He
Route::get('lien-he', function(){
	return "trang lien he";
})->name('contact');

// trang chu/danh muc/chitiet
Route::get('/{slug?}', function($slug = null){
	return "trang chu";
})->name('homepage');


