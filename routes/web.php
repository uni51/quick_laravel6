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
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list');

Route::get('view/escape', 'ViewController@escape');
Route::get('view/comment', 'ViewController@comment');
Route::get('view/if', 'ViewController@if');
Route::get('view/unless', 'ViewController@unless');
Route::get('view/isset', 'ViewController@isset');
Route::get('view/switch', 'ViewController@switch');
Route::get('view/while', 'ViewController@while');
Route::get('view/for', 'ViewController@for');
Route::get('view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('view/foreach_loop', 'ViewController@foreach_loop');
Route::get('view/forelse', 'ViewController@forelse');
Route::get('view/master', 'ViewController@master');
Route::get('view/comp', 'ViewController@comp');
Route::get('view/list', 'ViewController@list');

// Route::get('route/param/{id}', 'RouteController@param');
// Route::get('route/param/{id?}', 'RouteController@param');
// Route::get('route/param/{id?}', 'RouteController@param')->name('param');
Route::get('route/param/{id?}', 'RouteController@param')->where([ 'id' => '[0-9]{2,3}']);
Route::get('route/search/{keywd?}', 'RouteController@search')->where('keywd', '.*');
Route::prefix('members')->group(function() {
    Route::get('info', 'RouteController@info');
    Route::get('article', 'RouteController@article');
});
Route::namespace('Main')->group(function() {
    Route::get('route/ns', 'RouteController@ns');
});
Route::view('/route', 'route.view', [ 'name' => 'Laravel' ]);
//Route::redirect('/hoge', '/');
Route::redirect('/hoge', '/', 301);
Route::resource('articles', 'ArticleController');



// フォールバックルート
 Route::fallback(function () {
     return view('route.error');
 });
