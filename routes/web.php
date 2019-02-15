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

use Illuminate\Support\Facades\Redis;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'verified'], function() {
	Route::resource('posts', 'PostController');
	Route::get('/home','HomeController@index')->name('home');
	Route::get('/my/posts', 'PostController@myPosts')->name('posts.my');
});

Route::get('/paypal', function() {
	return Payment::doSomething();
});