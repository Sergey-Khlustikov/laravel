<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', [PostsController::class, 'contact']);

Route::resource('posts', 'PostsController');

Route::get('post/{id}', [PostsController::class, 'showPost']);

//Route::get('/posts', [PostsController::class, 'index']);
//Route::get('/posts/{id}', [PostsController::class, 'show']);


//Route::get('/about', function () {
//    return 'About page';
//});
//
//Route::get('/contacts', function () {
//    return 'Contacts page';
//});
//
//// Dynamic param route
//Route::get('/post/{id}', function ($id) {
//    return 'This is post ' . $id;
//});
//
//// Named Route
//Route::get('admin/dashboard', array('as' => 'admin.dashboard', function() {
//    $url = \route('admin.dashboard');
//
//    return 'Url is ' . $url;
//}));

///// DB Raw SQL Queries
///
//Route::get('/insert', function () {
//    DB::insert('insert into posts(title, content, is_admin) values(?, ?, 0)', ['PHP with Laravel', 'Laravel bla bla bla']);
//});

//Route::get('/read', function () {
//    return DB::select('select * from posts where id = ?', [1]);
//});
//
//Route::get('/update', function () {
//   return DB::update('update posts set title = "Updated Title" where id = ?', [1]);
//});

//Route::get('/delete', function () {
//    return DB::delete('delete from posts where id = ?', [1]);
//});
