<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Logout;
use App\Http\Controllers\CreateUser;
use App\Http\Controllers\DeleteBlog;
use App\Http\Controllers\Post;
use App\Http\Controllers\Edit;
use App\Http\Controllers\image2;
use App\Http\Controllers\UpdateBlog;
use App\Http\Controllers\Show;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Home;
use App\Http\Controllers\DeleteUser;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Liked;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Home::class,'home']);

Route::post('/',[Home::class,'home']);

// Route::post('/', function() {
//     return view('home');
// });

Route::get('show', function() {
    return view('show');
});

Route::post('search', function() {
    return view('search');
});


Route::get('login', function() {
    return view('login');
});

Route::post('insert', function() {
    return view('insert');
});

Route::get('post', function() {
    return view('post');
});

Route::post('post', function() {
    return view('post');
});

Route::post('post2',[Post::class,'post']);

Route::get('account', function() {
    return view('account');
});

Route::post('create_user', [CreateUser::class,'create_user']);

// Route::post('log-check', function(){
//     return view('log-check');
// });

Route::post('log-check2',[UserAuth::class,'login']);

Route::view('log-check3','log-check3');
Route::get('logout',[Logout::class,'logout']);
Route::view('logout2','logout2');
Route::view('error_login','error_login');
Route::post('delete',[DeleteBlog::class,'delete']);
Route::post('delete2',[DeleteBlog::class,'delete2']);
Route::get('delete2',[DeleteBlog::class,'delete2']);
Route::post('delete3',[DeleteBlog::class,'delete3']);


Route::get('delete_user',[DeleteUser::class,'delete_user']);
Route::post('edit',[Edit::class,'edit']);
Route::view('edit2','edit2');

Route::post('image',[image2::class,'image']);
Route::post('update',[UpdateBlog::class,'updateblog']);
Route::get('show/{id}',[Show::class,'show']);
Route::post('show/{id}',[Show::class,'show']);

Route::get('update2',[Profile::class,'update']);

Route::post('update2',[Profile::class,'update']);
Route::get('profile/{id}',[Profile::class,'profile']);
Route::post('profile/{id}',[Profile::class,'profile']);
Route::get('update3',[Profile::class,'update']);
Route::post('update3',[Profile::class,'update']);

Route::get('admin1',[Admin::class,'admin1']);
Route::post('admin1',[Admin::class,'admin1']);

Route::get('admin2/{id}',[Admin::class,'admin2']);
Route::post('admin2/{id}',[Admin::class,'admin2']);

Route::post('delete_user2',[DeleteUser::class,'delete_user2']);

Route::post('/like1',[Liked::class,'like1']);

