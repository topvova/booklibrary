<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('books')->insert([
                'title' => 'Title ' . $i,
                'description' => 'Description ' . str_random(30),
                'image' => 'http://placehold.it/100x150/'
            ]);
        }
    }
}
