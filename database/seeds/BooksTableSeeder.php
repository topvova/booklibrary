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
                'title' => str_random(10),
                'description' => str_random(50),
                'image' => str_random(10)
            ]);
        }
    }
}
