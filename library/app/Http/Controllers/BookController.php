<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author')->orderByDesc('title')->paginate(5);
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::get();
        return view('books.create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store (Request $request)
    {
        request()->validate(
            [
                'title' => 'required|min:3',
                'editorial' => 'required',
                'price' => 'required|numeric|min:0'
            ]
            );

        $book = new Book();
        $book->title= $request->get('title');
        $book->editorial= $request->get('editorial');
        $book->price= $request->get('price');
        $book->author()->associate(Author::findOrFail($request->get('author')));
        $book->save();
        return redirect()->route('books.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        $authors = Author::get();
        return view('books.edit', compact('book','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->title= $request->get('title');
        $book->editorial= $request->get('editorial');
        $book->price= $request->get('price');
        $book->author_id=$request->get('author_id');
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book -> delete();
        return redirect()->route('books.index');
    }

    public function newBook()
    {
        $book = new Book();
        $book->title="Nou llibre";
        $book->editorial="Nova editorial";
        $book->price=999;
        $book->save();

    }

    public function editBook($id)
    {
        $booktoModify = Book::findOrFail($id);
        $booktoModify -> title = "Titol modificat";
        $booktoModify -> save();
    }
}
