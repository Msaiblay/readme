<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now=Carbon::now();
        DB::table('books')->insert([
            'isbn'=> '0001',
            'title'=> 'The voice of Hope',
            'mmtitle'=> '',
            'coverphoto'=> '/storage/bookcover/2.jpg',
            'pages'=> '300',
            'publishyear'=>2008,
            'price'=> '3000',
            'discount'=> '',
            'summary'=> 'The best collection',
            'annotation'=> 'the most wide-ranging',
            'type'=> '1',
            'file'=> '/storage/bookfile/1.pdf',
            'status'=> '0',
            'author_id'=> '1',
            'language_id'=> '1',

            'created_at'=> $now,
            'updated_at'=> $now,
        ]);
        DB::table('book_genre')->insert([
            'book_id'=>6,
            'genre_id'=>2,

        ]);



        DB::table('books')->insert([
            'isbn'=> '0002',
            'title'=> 'English Book',
            'mmtitle'=> 'English',
            'coverphoto'=> '/storage/bookcover/2.jpg',
            'pages'=> '200',
            'publishyear'=>2000,
            'price'=> '3000',
            'discount'=> '',
            'summary'=> 'The best',
            'annotation'=> 'the most wide-ranging',
            'type'=> '0',
            'file'=> '/storage/bookfile/2.pdf',
            'status'=> '0',
            'author_id'=> '2',
            'language_id'=> '2',

            'created_at'=> $now,
            'updated_at'=> $now,
        ]);

        DB::table('book_genre')->insert([
            'book_id'=>7,
            'genre_id'=>2,
        ]);


        DB::table('books')->insert([
            'isbn'=> '0003',
            'title'=> 'Math Book',
            'mmtitle'=> 'Myanmar',
            'coverphoto'=> '/storage/bookcover/2.jpg',
            'pages'=> '500',
            'publishyear'=>1999,
            'price'=> '3000',
            'discount'=> '',
            'summary'=> 'The best',
            'annotation'=> 'the most wide-ranging',
            'type'=> '0',
            'file'=> '/storage/bookfile/3.pdf',
            'status'=> '0',
            'author_id'=> '2',
            'language_id'=> '1',

            'created_at'=> $now,
            'updated_at'=> $now,
        ]);

        DB::table('book_genre')->insert([
            'book_id'=>8,
            'genre_id'=>1,
        ]);
    }
}
