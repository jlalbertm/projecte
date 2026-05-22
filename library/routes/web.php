<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Author;
/*
Route::get('/', function () {
    return view('start');
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
})->name('path_contact');*/

Route::get('greeting/{name?}/{id?}', function ($name="Convidat", $id=9999) {
    return "hola, $name el teu ID es el $id";
})->where('name',"[A-Za-z]+")
    ->where('id',"[0-9]+")
    ->name('greeting');

Route::get('/', function () {
    $name ="Jose Luis";
    return view('start',compact('name'));
})->name('start');
/*
Route::get('list',function(){
    $books = array(
        array("title" => "titul1", "author" => "autor1"),
        array("title" => "titul2", "author" => "autor2"),
        array("title" => "titul4", "author" => "autor3"),
        array("title" => "titul4", "author" => "autor4"),
    );
    return view('books.list',compact('books'));
})->name('book_list');
*/
Route::get('fecha',function(){
    return date("d/m/y h:i:s");
});
/*
Route::get('books',[BookController::class,'index'])->name('book_list');
Route::get('books/{id}',[BookController::class,'show']);
*/
Route::resource('books', BookController::class);

Route::get('newBook',[BookController::class,'newBook']);
Route::get('editBook/{id}',[BookController::class,'editBook']);
/*encara no
Route::get('relationTest',function(){
    $author=Author::findOrFail(2);
    $book = new Book();
    $book->title="Test Llibre de relacio autor";
    $book->editorial="Test relacio";
    $book->price=123;
    $book->author()->associate($author);
    $book->save();
    return redirect()->route('books.index');
});*/


