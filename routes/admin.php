<?php 

Route::get('/', function(){
	return view('admin.dashboard');
});

Route::group(['prefix' => 'categories'], function() {
	Route::get('/', function(){
		return view('admin.category.list');
	})->name('cate.list');

	Route::get('/add', function() {
	    return 'tao moi danh muc';
	})->name('cate.add');

	Route::get('/edit/{id}', function($id) {
	    return 'sua danh muc';
	})->name('cate.edit');

	Route::get('/remove/{id}', function($id) {
	    return 'sua danh muc';
	})->name('cate.remove');
});

Route::group(['prefix' => 'posts'], function() {
	Route::get('/', function(){
		return 'danh sach bai viet';
	})->name('post.list');

	Route::get('/add', function() {
	    return 'tao moi bai viet';
	})->name('post.add');

	Route::get('/edit/{id}', function($id) {
	    return 'sua bai viet';
	})->name('post.edit');

	Route::get('/remove/{id}', function($id) {
	    return 'sua bai viet';
	})->name('post.remove');
});

Route::group(['prefix' => 'comments'], function() {
	Route::get('/', function(){
		return 'danh sach binh luan';
	})->name('comment.list');

	Route::get('/edit/{id}', function($id) {
	    return 'sua binh luan';
	})->name('comment.edit');

	Route::get('/reply/{id}', function($id) {
	    return 'tra loi binh luan';
	})->name('comment.edit');

	Route::get('/remove/{id}', function($id) {
	    return 'sua binh luan';
	})->name('post.remove');
});

Route::get('profile', function() {
    return 'trang thong tin ca nhan';
})->name('profile');

Route::get('change-password', function() {
    return 'trang thong doi mat khau';
})->name('profile');




 ?>