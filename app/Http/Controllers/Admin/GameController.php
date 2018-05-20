<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

		$model = new Game();

		// check Game thuoc tinh $fillable
		$model->fill($rq->all()); 

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
