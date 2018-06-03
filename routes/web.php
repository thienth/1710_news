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

Route::post('cp-login', function(Request $rq) {
	$remember = $rq->has('remember') ? true : false;
    if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password], $remember)) {
        return redirect()->route('game.list');
    }else{
    	return view('auth.login');
    }
})->name('login');

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

Route::get('sendemail/{content}', function($content) {
	Mail::send('emails.mail', ['name' => 'thienth', 'body' => $content], function($message) {
	    $message->to('thienth32@gmail.com', 'ThienTH')
	    		->to('duyquangnguyen10296@gmail.com')
	    		->cc('d1396it@gmail.com')
	    		->bcc('haunt42@gmail.com')
	            ->subject('Artisans Web Testing Mail');
	    $message->from('thienth@fpt.edu.vn','Thienth fpt');
	});

	return 'send email success!';
});

// trang chu/danh muc/chitiet
Route::get('/{slug?}', function($slug = null){
	if(!$slug){
		// hien thi giao dien trang chu
		return view('homepage');
	}
})->name('homepage');


