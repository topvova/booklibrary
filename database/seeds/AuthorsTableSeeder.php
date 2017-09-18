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

        DB::table('authors')->insert(
            array(
                [
                    'name' => 'Geoffrey',
                    'surname' => 'Chaucer'
                ],
                [
                    'name' => 'Dante',
                    'surname' => 'Alighieri'
                ],
                [
                    'name' => 'William',
                    'surname' => 'Shakespeare'
                ],
                [
                    'name' => 'Herman',
                    'surname' => 'Melville'
                ],
                [
                    'name' => 'George',
                    'surname' => 'Orwell'
                ],
                [
                    'name' => 'Aldous',
                    'surname' => 'Huxley'
                ],
                [
                    'name' => 'Homer',
                    'surname' => ''
                ],
                [
                    'name' => 'Miguel',
                    'surname' => 'de Cervantes'
                ],
                [
                    'name' => 'Marcel',
                    'surname' => 'Proust'
                ],
                [
                    'name' => 'Gustave',
                    'surname' => 'Flaubert'
                ]
            )
        );

    }
}
