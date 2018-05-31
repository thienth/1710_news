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
// trang chu/danh muc/chitiet
Route::get('/{slug?}', function($slug = null){
	// raw query
	// $games = DB::select("select * from games order by id desc");
	// dd($games);
	// $games = App\Game::where('price', '>', 1990)
	// 					->orderBy('name')
	// 					->get();


	// foreach ($games as $g) {
	// 	echo "<p>" . $g->name . "</p>";
	// }
	// 
	// App\Game::chunk(10, function($games){
	// 	foreach ($games as $g) {
	// 		echo "<p>" . $g->name . "</p>";
	// 	}
	// });

	// die;
	// 
	// dd(App\Game::find([1, 2, 30]));
	// $games = App\Game::where('price', '>', 1000)
	// 					->get()
	// 					->toJson();

	// dd($games);
	// --------------delete------------------
	// $game = App\Game::find($slug);
	// $game->delete();
	// die;
	// 
	// --------------insert ------------------
	// $game = new App\Game();
	// $faker = Faker\Factory::create();
	// $game->name = $faker->name;
	// $game->slug = str_slug($game->name);
	// $game->cate_id = rand(1, 4);
	// $game->feature_image = $faker->imageUrl(800, 600, 'cats');
	// $game->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000);
	// $game->description = $faker->realText($maxNbChars = 200, $indexSize = rand(1, 5));

	// var_dump($game->save());
	// echo "<br>";
	// dd($game->id);
	
	// --------------insert ------------------
	// $game = App\Game::find(2003);
	// var_dump($game);
	// echo "<br>";
	// $faker = Faker\Factory::create();
	// $game->name = $faker->name;
	// $game->slug = str_slug($game->name);
	// $game->cate_id = rand(1, 4);
	// $game->feature_image = $faker->imageUrl(800, 600, 'cats');
	// $game->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000);
	// $game->description = $faker->realText($maxNbChars = 200, $indexSize = rand(1, 5));

	// var_dump($game->save());
	// echo "<br>";
	// dd($game);



	if(!$slug){


		// hien thi giao dien trang chu
		return view('homepage');
	}
})->name('homepage');


