<?php

use Illuminate\Database\Seeder;

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_book')->insert(
            array(
                [
                'author_id' => 1,
                'book_id' => 1
                ],
                [
                'author_id' => 2,
                'book_id' => 2
                ],
                [
                'author_id' => 3,
                'book_id' => 3
                ],
                [
                'author_id' => 4,
                'book_id' => 4
                ],
                [
                'author_id' => 5,
                'book_id' => 5
                ],
                [
                'author_id' => 6,
                'book_id' => 6
                ],
                [
                'author_id' => 7,
                'book_id' => 7
                ],
                [
                'author_id' => 8,
                'book_id' => 8
                ],
                [
                'author_id' => 9,
                'book_id' => 9
                ],
                [
                'author_id' => 10,
                'book_id' => 10
                ]
            )
        );
    }
}
