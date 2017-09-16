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
        for ($i = 0; $i < 20; $i++) {
            DB::table('author_book')->insert([
                'author_id' => rand(1, 10),
                'book_id' => rand(1, 20)
            ]);
        }
    }
}
