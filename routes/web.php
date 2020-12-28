<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Collection;

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
	return view('home');
    //return view('welcome');
});

Route::get('home', function () {
	//return "<h2>sdfsdfsdf</h2>";
	return view('home');
    //return view('welcome');
});

Route::get('/about/', function () {	
	return view('about');
});

Route::get('/work/', function () {
	$menu_points = [];
	$menu_points[] = ['href'=>'http://mail.ru','title'=>'mail.ru', 'blank'=>1];
	$menu_points[] = ['href'=>'http://google.com','title'=>'google.com', 'blank'=>1];
	$menu_points[] = ['href'=>'home','title'=>'Home'];
	$menu_points[] = ['href'=>'about','title'=>'About'];
	$menu_points[] = ['href'=>'work','title'=>'Work'];
	$menu_points[] = ['href'=>'blog','title'=>'Blog'];
	$menu_points[] = ['href'=>'articles','title'=>'Articles'];
	$test_value = "TEST VAlue";
	return view('work',compact('menu_points', 'test_value'));
});

Route::get('/blog/', function () {
	$slide_points = [];
	$slide_point = new StdClass();
	$slide_point->src = 'images/slider-img.jpg';
	$slide_point->title = 'Slide number ONE';
	$slide_point->description = 'This is just slide. Only one slide in one thousand other sliders';
	$slide_points[] = $slide_point;

	$slide_point = new StdClass();
	$slide_point->src = 'images/slider-img.jpg';
	$slide_point->title = 'Slide number TWO';
	$slide_point->description = 'This is one more slide';
	$slide_points[] = $slide_point;

	$slide_point = new StdClass();
	$slide_point->src = 'images/Java-1.png';
	$slide_point->title = 'Slike about Java';
	$slide_point->description = 'This slide show Java for us';
	$slide_points[] = $slide_point;
	//dd($slide_points);
	return view('blog', compact('slide_points'));
});

Route::get('/contacts/', function () {

	return view('contacts');
});

Route::get('/articles/', function () {
	$menu_points = [];
	$menu_points[] = ['href'=>'http://mail.ru','title'=>'mail.ru', 'blank'=>1];
	$menu_points[] = ['href'=>'http://google.com','title'=>'google.com', 'blank'=>1];
	$menu_points[] = ['href'=>'home','title'=>'Home'];
	$menu_points[] = ['href'=>'about','title'=>'About'];
	$menu_points[] = ['href'=>'work','title'=>'Work'];
	$menu_points[] = ['href'=>'blog','title'=>'Blog'];
	$menu_points[] = ['href'=>'contacts','title'=>'Contacts'];

	$articles = DB::select('select * from articles');
	//dd($articles);
	
	return view('articles',compact('articles'));
});

Route::post('/createArticle','App\Http\Controllers\ArticleController@createArticle');
Route::get('/getArticles', 'App\Http\Controllers\ArticleController@getArticles');
Route::post('/deleteArticle/{id}', 'App\Http\Controllers\ArticleController@deleteArticle');
Route::post('/editArticle/{id}', 'App\Http\Controllers\ArticleController@editArticle');
