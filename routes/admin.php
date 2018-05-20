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

use Illuminate\Http\Request;
Route::group(['prefix' => 'games'], function() {
	Route::get('/', function(Request $rq){
		$keyword = $rq->keyword;
		if($keyword !== null){
			$games = App\Game::where('name', 'like', "%$rq->keyword%")
								->paginate(20);
			$games->withPath("?keyword=$keyword");
		}else{
			$games = App\Game::paginate(20);
		}
		return view('admin.game.list', compact('games', 'keyword'));
	})->name('game.list');

	Route::get('/add', function() {
		$model = new App\Game();

	    return view('admin.game.form', compact('model'));
	})->name('game.add');

	Route::get('/edit/{id}', function($id) {
		$model = App\Game::find($id);
	    return view('admin.game.form', compact('model'));
	})->name('game.edit');

	Route::post('/save', function(Request $rq) {
	    return 'luu bai viet';
	})->name('game.save');

	Route::get('/remove/{id}', function($id) {
		$game = App\Game::find($id);
		if($game !== null){
			$game->delete();
		}
	    return redirect(route('game.list'));
	})->name('game.remove');
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