<?php

namespace Database\Seeders;

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
        $book = new Book();
        $book->title="EL libro de la selva";
        $book->author="Rudyard Kipling";
        $book->year="1967";
        $book->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices hendrerit risus nec finibus. Aenean consectetur, augue at fringilla bibendum, enim ex cursus est, fringilla hendrerit ante nulla et ante. Cras at massa aliquam, suscipit sem ut, volutpat mi. Nulla elementum sem sit amet ex pretium congue. Praesent at dolor posuere, ullamcorper massa non, imperdiet lorem.";
        $book->price="10.20";
        $book->save();

        $book = new Book();
        $book->title="EL libro gordo de Petete";
        $book->author="Petete el gordo";
        $book->year="1980";
        $book->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices hendrerit risus nec finibus. Aenean consectetur, augue at fringilla bibendum, enim ex cursus est, fringilla hendrerit ante nulla et ante. Cras at massa aliquam, suscipit sem ut, volutpat mi. Nulla elementum sem sit amet ex pretium congue. Praesent at dolor posuere, ullamcorper massa non, imperdiet lorem.";
        $book->price="15.20";
        $book->save();

        $book = new Book();
        $book->title="Ciudad de hueso";
        $book->author="Cassandra Clare";
        $book->year="2007";
        $book->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices hendrerit risus nec finibus. Aenean consectetur, augue at fringilla bibendum, enim ex cursus est, fringilla hendrerit ante nulla et ante. Cras at massa aliquam, suscipit sem ut, volutpat mi. Nulla elementum sem sit amet ex pretium congue. Praesent at dolor posuere, ullamcorper massa non, imperdiet lorem.";
        $book->price="17.20";
        $book->save();

        $book = new Book();
        $book->title="Ciudad de ceniza";
        $book->author="Cassandra Clare";
        $book->year="2008";
        $book->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices hendrerit risus nec finibus. Aenean consectetur, augue at fringilla bibendum, enim ex cursus est, fringilla hendrerit ante nulla et ante. Cras at massa aliquam, suscipit sem ut, volutpat mi. Nulla elementum sem sit amet ex pretium congue. Praesent at dolor posuere, ullamcorper massa non, imperdiet lorem.";
        $book->price="19.20";
        $book->save();

        $book = new Book();
        $book->title="Ciudad de cristal";
        $book->author="Cassandra Clare";
        $book->year="2009";
        $book->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices hendrerit risus nec finibus. Aenean consectetur, augue at fringilla bibendum, enim ex cursus est, fringilla hendrerit ante nulla et ante. Cras at massa aliquam, suscipit sem ut, volutpat mi. Nulla elementum sem sit amet ex pretium congue. Praesent at dolor posuere, ullamcorper massa non, imperdiet lorem.";
        $book->price="15.20";
        $book->save();
    }
}
