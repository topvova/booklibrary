<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('authors')->insert([
                'name' => str_random(10),
                'surname' => str_random(15)
            ]);
        }
    }
}
