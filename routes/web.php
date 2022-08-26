<?php

use App\User;
use Carbon\Carbon;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/contact', [PostsController::class, 'contact']);
//
//Route::resource('posts', 'PostsController');
//
//Route::get('post/{id}', [PostsController::class, 'showPost']);

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
//    DB::insert('insert into posts(title, content, is_admin) values(?, ?, 0)', ['New post', 'Laravel bla bla bla']);
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


////////////// ELOQUENT

//Route::get('/read', function () {
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//    }
//});


//Route::get('/find', function () {
//    $post = Post::find(1);
//
//    return $post->title;
//});


//Route::get('/findWhere', function () {
//    return Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//});

//Route::get('/findMore', function () {
////    return Post::findOrFail(1);
//
//    return Post::where('users_count', '<', 50)->firstOrFail();
//});


//Route::get('/basicInsert', function () {
//    $post = new Post;
//
//    $post->title = 'Brand new Post';
//    $post->content = 'Bla bla bla bla bla bla bla';
//    $post->is_admin = 1;
//
//    $post->save();
//});

//Route::get('/basicEdit', function () {
//    $post = Post::find(1);
//
//    $post->title = 'Edited post title';
//
//    $post->save();
//});

//Route::get('/create', function () {
//    Post::create([
//        'title' => 'The create method',
//        'content' => 'The created method content',
//        'is_admin' => 0,
//    ]);
//});


//Route::get('/update', function () {
//   Post::where('id', 1)
//       ->where('is_admin', 0)
//       ->update(['title' => 'Updated post title']);
//});

//
//Route::get('/delete', function () {
//    $post = Post::find(2);
//
//    $post->delete();
//});


//Route::get('/destroy', function () {
//   Post::destroy([3, 4]);
//});

//Route::get('/softDelete', function () {
//    Post::find(5)->delete(); // До этого модели добавилось свойство SoftDelete
//});


//Route::get('/getSoftDeletes', function () {
////    return Post::withTrashed()->where('id', 5)->get();
//
//    return Post::onlyTrashed()->where('id', 5)->get();
//});


//Route::get('/restoreSoftDeletes', function () {
//    Post::withTrashed()->where('id', 5)->restore();
//});


//Route::get('/forceDelete', function () {
//    Post::withTrashed()->where('id', 5)->forceDelete();
//});


/////////// Relationships

///// One to One
//Route::get('/user/{id}/post', function ($id) {
//    return User::find($id)->post;
//});
//
//Route::get('/post/{id}/user', function ($id) {
//    return Post::find($id)->user;
//});

///// One to Many
//Route::get('/user/{id}/posts', function ($id) {
//    return User::find($id)->posts;
//});


///// Many to Many
//Route::get('/user/{id}/role', function ($id) {
//    return User::find($id)->roles;
//});
//// get pivot table
//Route::get('/user/pivot', function () {
//    $user = User::find(1);
//
//    foreach ($user->roles as $role) {
//        echo $role->pivot;
//    }
//});

//Route::get('/user/{id}/country', function ($id) {
//    $country = Country::find(1);
//
//    foreach ($country->posts as $post) {
//        echo $post->title;
//    }
//});

////// One to one POLYMORPHIC
//// user -> photo
//Route::get('/user/{id}/photo', function ($id) {
//    return User::find($id)->photos;
//});
//
//// post -> photo
//Route::get('/post/{id}/photo', function ($id) {
//    return Post::find($id)->photos;
//});
//
//
//// (inverse) photo -> post/user
//Route::get('photo/{id}/owner', function ($id) {
//    return Photo::findOrFail($id)->imageable;
//});
//
//
///// Many to Many POLYMORPHIC
//Route::get('post/{id}/tags', function ($id) {
//    return Post::find($id)->tags;
//});
//// Inverse
//Route::get('tags/{id}/posts', function ($id) {
//    return Tag::find($id)->posts;
//});

//////////////////////////////////////////////////////////

Route::group(['middleware' => 'web'], function () {
    Route::resource('/posts', 'PostsController');

    Route::get('/dates', function () {
        $date = new DateTime('+1 week');

        echo $date->format('m-d-Y');

        echo '<br>';

        echo Carbon::now()->addDays(2)->diffForHumans();
    });

    Route::get('/getName', function () {
        $user = User::find(1);

        echo $user->name;
    });

    Route::get('/setName', function () {
        $user = User::find(1);

        $user->name = 'sergey';
        $user->save();
    });
});

