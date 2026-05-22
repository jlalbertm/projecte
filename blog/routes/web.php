<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LanguageController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('hello', function () {
    return "hola mon";
});

/*Route::get('greeting/{name}', function ($name) {
    return "hola, ".$name;
});


Route::get('greeting/{name?}', function ($name="Convidat") {
    return "hola, ".$name;
});

Route::get('greeting/{name?}', function ($name="Convidat") {
    return "hola, ".$name;
})->where('name',"[A-Za-z]+");

Route::get('contact', function () {
    return "contacte";
})->name('path_contact');



Route::get('/', function () {
    $name ="Pau";
    return view('start',compact('name'));
})->name('start');

Route::get('list',function(){
    $books = array(
        array("title" => "titul1", "author" => "autor1"),
        array("title" => "titul2", "author" => "autor2"),
        array("title" => "titul4", "author" => "autor3"),
        array("title" => "titul4", "author" => "autor4"),
    );
    return view('books.list',compact('books'));
})->name('book_list');

Route::get('fecha',function(){
    return date("d/m/y h:i:s");
});

Route::get('posts',function(){
    return date("d/m/y h:i:s");
});

*/

////////////////////////////////

/*BLOG*/
Route::get('fecha',function(){
    return date("d/m/y h:i:s");
});


Route::get('greeting/{name?}/{id?}', function ($name="Convidat", $id=0) {
    return "hola, $name el teu ID es el $id";
})->where('name',"[A-Za-z]+")
    ->where('id',"[0-9]+")
    ->name('greeting');
/*
Route::get('post/{id?}', function ($id=0) {
    return "<h1>List of posts</h1> post número $id";
})  ->where('id',"[0-9]")
    ->name('post_number');
*/
Route::get('/', function () {
    $name ="José Luis2";
    return view('home',compact('name'));
})->name('home');

/*
Route::get('show',function(){
    $posts = array(
        array("title" => "titul1", "author" => "autor1"),
        array("title" => "titul2", "author" => "autor2"),
        array("title" => "titul4", "author" => "autor3"),
        array("title" => "titul4", "author" => "autor4"),
    );
    return view('posts.show',compact('posts'));
})->name('show');
*/

Route::resource('posts', PostController::class);//->only(['index', 'show', 'create', 'edit','update','destroy','store','post']);

Route::get('newPost', [PostController::class, 'newPost']);
Route::get('editPost/{id}', [PostController::class, 'editPost']);

Route::resource('language', LanguageController::class);

/*
Route::get('show/{id}', [PostController::class,'show'])->name('show');
Route::get('index', [PostController::class,'index'])->name('index');
Route::get('create', [PostController::class,'create'])->name('create');
*/



