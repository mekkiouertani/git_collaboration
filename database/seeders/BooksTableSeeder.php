<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = file_get_contents(__DIR__ . '/books_db.json');
        $books = json_decode($books, true);
        foreach ($books as $key => $book) {
            $newBook = new Book();
            $newBook->title = $book['title'];
            $newBook->image = $book['thumbnailUrl'];

            $newBook->save();
        }

        //dd($books);

        //config
        //$recipes = config('db.recipes');
        //dd($recipes);

        //csv
        // $houses = array_map('str_getcsv', file(__DIR__ . '/houses.csv'));
        // //dd($houses);
        // foreach ($houses as $key => $house) {
        //     //da importare il model house
        //     if($key >0){
        //         $newhouse = new House();
        //         $newhouse->image = $house[0]; // getting the image

        //         $newhouse->save();
        //     }

        // }
    }
}
