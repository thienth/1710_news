<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \File;
use App\Game;
use App\Category;

class GameController extends Controller
{
    function index(Request $rq){
		$keyword = $rq->keyword;
		if($keyword !== null){
			$games = Game::where('name', 'like', "%$rq->keyword%")
								->paginate(20);
			$games->withPath("?keyword=$keyword");
		}else{
			$games = Game::paginate(20);
		}
		return view('admin.game.list', compact('games', 'keyword'));
	}

	function add() {
		$model = new Game();
		$cates = Category::all();
	    return view('admin.game.form', compact('model', 'cates'));
	}

	function edit($id) {
		$model = Game::find($id);
		$cates = Category::all();
	    return view('admin.game.form', compact('model', 'cates'));
	}

	function save(Request $rq) {
		$messages = [
		    'name.required' => 'Vui lòng nhập tên!',
		    'name.max' => 'Độ dài không quá 10 ký tự!',
		    'slug.required' => 'Vui lòng nhập đường dẫn!',
		];
		$rq->validate([
	        'name' => 'required|max:10',
	        'slug' => 'required'
	    ], $messages);

		if($rq->id != null){
			$model = Game::find($rq->id);
		}else{
			$model = new Game();
		}

		// check Game thuoc tinh $fillable
		$model->fill($rq->all()); 

		if($rq->hasFile('feature_image')){
			$ext = File::extension($rq->feature_image->getClientOriginalName());
			$fileName = $rq->slug . '-' . uniqid() . '.' . $ext;
			$model->feature_image = $rq->feature_image->storeAs('uploads', $fileName);
		}
		// dd($model->feature_image);

	    $model->save();

	    return redirect(route('game.list'));
	}

	function remove($id) {
		$game = Game::find($id);
		if($game !== null){
			$game->delete();
		}
	    return redirect(route('game.list'));
	}

	function checkSlug(Request $rq){
		if($rq->id <= 0){
			$count = Game::where('slug', $rq->slug)->count();
		}else{
			$listGame = Game::where('slug', $rq->slug)
						->get();
			$listGame = $listGame->whereNotIn('id', [$rq->id]);
			$count = count($listGame);
		}

		$result = $count == 0 ? true : false;
		return response()->json(['result' => $result]);
	}
}
