<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$author = new Author();
        $author->name = "Maria";
        $author->born=1985;
        $author->save();
        $book = new Book();
        $book->title = "Llibre del seeder";
        $book->editorial = "Editorial_seeder";
        $book->price=13;
        $book->author()->associate($author);
        $book->save();*/
        Author::factory()->count(5)->create()->each(function($author){
            $book = Book::factory()->count(2)->create(['author_id'=>$author->id]);
        });
    }
}
